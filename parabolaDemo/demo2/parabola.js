/**
 * Created by hure on 2016/9/19.
 */
;
(function () {
    var _$ = function (_this) {
        return _this.constructor == jQuery ? _this : $(_this);
    };
// ��ȡ��ǰʱ��
    function now() {
        return +new Date();
    }

// ת��Ϊ����
    function toInteger(text) {
        text = parseInt(text);
        return isFinite(text) ? text : 0;
    }

    var Parabola = function (options) {
        this.initialize(options);
    };
    Parabola.prototype = {
        constructor: Parabola,
        /**
         * ��ʼ��
         * @classDescription ��ʼ��
         * @param {Object} options ������� .
         */
        initialize: function (options) {
            this.options = this.options || this.getOptions(options);
            var ops = this.options;
            if (!this.options.el) {
                return;
            }
            this.$el = _$(ops.el);
            this.timerId = null;
            this.elOriginalLeft = toInteger(this.$el.css("left"));
            this.elOriginalTop = toInteger(this.$el.css("top"));
            // this.driftX X���ƫ������
            //this.driftY Y���ƫ������
            if (ops.targetEl) {
                this.driftX = toInteger(_$(ops.targetEl).css("left")) - this.elOriginalLeft;
                this.driftY = toInteger(_$(ops.targetEl).css("top")) - this.elOriginalTop;
            } else {
                this.driftX = ops.offset[0];
                this.driftY = ops.offset[1];
            }
            this.duration = ops.duration;
            // ����ʽ����
            this.curvature = ops.curvature;
            // �������������Լ�����ȷ���˶����ߺ�����Ҳ����ȷ��a, b��ֵ��
            //a=this.curvature
            /* ��ʽ�� y = a*x*x + b*x + c;
             */
            /*
             * ��Ϊ����(0, 0), ���c = 0
             * ���ǣ�
             * y = a * x*x + b*x;
             * y1 = a * x1*x1 + b*x1;
             * y2 = a * x2*x2 + b*x2;
             * ���õڶ������꣺
             * b = (y2+ a*x2*x2) / x2
             */
            // ����
            this.b = ( this.driftY - this.curvature * this.driftX * this.driftX ) / this.driftX;

            //�Զ���ʼ
            if (ops.autostart) {
                this.start();
            }
        },
        /**
         * ��ʼ�� ���ò��� ���ز���MAP
         * @param {Object} options ������� .
         * @return {Object} ���ò���
         */
        getOptions: function (options) {
            if (typeof options !== "object") {
                options = {};
            }
            options = $.extend({}, defaultSetting, _$(options.el).data(), (this.options || {}), options);

            return options;
        },
        /**
         * ��λ
         * @param {Number} x x���� .
         * @param {Object} y y���� .
         * @return {Object} this
         */
        domove: function (x, y) {

            this.$el.css({
                position: "absolute",
                left: this.elOriginalLeft + x,
                top: this.elOriginalTop + y
            });

            return this;
        },
        /**
         * ÿһ��ִ��
         * @param {Data} now ��ǰʱ�� .
         * @return {Object} this
         */
        step: function (now) {
            var ops = this.options;
            var x, y;
            if (now > this.end) {
                // ���н���
                x = this.driftX;
                y = this.driftY;
                this.domove(x, y);
                this.stop();
                if (typeof ops.callback === 'function') {
                    ops.callback.call(this);
                }
            } else {
                //x ÿһ����X���λ��
                x = this.driftX * ((now - this.begin) / this.duration);
                //ÿһ����Y���λ��y = a*x*x + b*x + c;   c==0;
              //  y =0.01*x*x -2*x;
                y = this.curvature * x * x + this.b * x;

                this.domove(x, y);
                if (typeof ops.stepCallback === 'function') {
                    ops.stepCallback.call(this,x,y);
                }
                var d=now - this.begin,t1=(now - this.begin) / this.duration;
                console.log("n:"+now+",b:"+this.begin+",d:"+d+",t1:"+t1);
                console.log(",this.driftX:"+this.driftX+",x:"+x);
            }
            return this;
        },
        /**
         * ����options
         *  @param {Object} options ��ǰʱ�� .
         */
        setOptions: function (options) {
            this.reset();
            if (typeof options !== "object") {
                options = {};
            }
            this.options = $.extend(this.options,options);
            this.initialize(this.options);
            return this;
        },
        /**
         * ��ʼ
         */
        start: function () {
            var self = this;
            // ������ֹʱ��
            this.begin = now();
            this.end = this.begin + this.duration;
            if (this.driftX === 0 && this.driftY === 0) {
                // ԭ��̤���ͱ��˷�������
                return;
            }
            /*timers.push(this);
             Timer.start();*/
            if (!!this.timerId) {
                clearInterval(this.timerId);
                this.stop();
            }
            this.timerId = setInterval(function () {
                var t = now();
                self.step(t);
            }, 13);
            return this;
        },
        /**
         * ����
         */
        reset: function (x, y) {
            this.stop();
            x = x ? x : 0;
            y = y ? y : 0;
            this.domove(x, y);
            return this;
        },
        /**
         * ֹͣ
         */
        stop: function () {
            if (!!this.timerId) {
                clearInterval(this.timerId);

            }
            return this;
        }
    };
    var defaultSetting = {
        el: null,
        //ƫ��λ��
        offset: [0, 0],
        //�յ�Ԫ�أ���ʱ�ͻ��Զ���ȡ��Ԫ�ص�left��top�����������������offset��ʧЧ
        targetEl: null,
        //�˶���ʱ�䣬Ĭ��500����
        duration: 500,
        //���������ʣ����������ĳ̶ȣ�Խ�ӽ���0Խ��ֱ�ߣ�Ĭ��0.001
        curvature: 0.001,
        //�˶���ִ�еĻص�����
        callback: null,
        // �Ƿ��Զ���ʼ��Ĭ��Ϊfalse
        autostart: false,
        //�˶�������ִ�еĻص�����
        stepCallback: null
    };
    window.Parabola = Parabola;
})();