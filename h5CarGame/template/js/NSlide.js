/**
 * Created by hure on 2016/10/25.
 */
(function() {
    var NSlide = function(container, params) {
        var n = this;
        params = params || {};
        var options = {
            container: container,
            affect: 'slide',
            duration: '300',
            direction: 'horizontal'
        };
        var originParams = {};
        for(var param in params) {
            if(typeof params[param] === 'object') {
                originParams[param] = {};
                for(var defPa in params[param]) {
                    originParams[param][defPa] = params[param][defPa];
                }
            } else {
                originParams[param] = params[param];
            }
        }
        for(var opt in options) {
            if(typeof params[opt] === 'object') {
                for(var defOpt in options[opt]) {
                    if(typeof params[opt][defOpt] === 'undefined') {
                        params[opt][defOpt] = options[opt][defOpt];
                    }
                }
            } else if(typeof params[opt] === 'undefined') {
                params[opt] = options[opt];
            }
        }
        n.originParams = originParams;
        n.params = params;
        n.slides = null;
        n.wWidth = window.innerWidth;
        n.wHeight = window.innerHeight;
        n.activeIndex = 0;
        n.prevElement = null;
        n.currentElement = null;
        n.nextElement = null;
        n.container = document.querySelector(container);
        n.wrapper = n.container.getElementsByClassName('wrapper')[0];
        n.sldieMove = 0;
        var init = function() {
            if(n.params.direction == "vertical") {
                n.container.className += ' container-vertical';
            } else {
                n.container.className += ' container-horizontal';
            }
            n.initEvent();
            if(n.params.onInit){
                n.params.onInit(n);
            }
            n.refresh();
            if(n.params.onImagesReady){
                n.preloadImages();
            }
        };
        n.refresh=function(){
            n.slides = n.container.getElementsByClassName('slide');
            n.nextElement = n.slides[n.activeIndex].nextElementSibling;
            n.currentElement = n.slides[n.activeIndex];
            for(var i = 0; i < n.slides.length; i++) {
                n.slides[i].style.height = n.wHeight + 'px';
            }
        };
        n.initEvent = function() {
            if(n.wrapper){
                n.onTransitionEnd(n.wrapper,n.onSlideChangeEnd,false);
            }
            window.addEventListener('touchstart', n.onTouchStart, false);
            window.addEventListener('touchmove', n.onTouchMove, false);
            window.addEventListener('touchend', n.onTouchEnd, false);
        };
        n.onTouchStart = function(e) {
            var e = e || window.event;
            var touches = e.touches[0];
        };
        n.onTouchMove = function(e) {
//			e.preventDefault();
            var e = e || window.event;
            var touches = e.touches[0];
            var ex = touches.pageX;
            var ey = touches.pageY;
        };
        n.onTouchEnd = function(e) {
            window.addEventListener('touchmove', null, false);
            window.addEventListener('touchend', null, false);
        }
        n.imagesToLoad=[];
        n.imagesLoaded=0;
        n.loadImage=function(imgElement,src,callback){
            var image;
            function onReady(){ //加载完成时调�?
                if(callback) callback();
            }
            if(!imgElement.complete){
                if(src){
                    image=new Image();
                    image.onload=onReady;
                    image.onerror=onReady;
                    if(src){
                        image.src=src;
                    }
                }else{
                    onReady();
                }
            }else{ //图片已加�?
                onReady();
            }
        };
        n.preloadImages=function(){
            n.imagesToLoad=n.container.getElementsByTagName('img');
            function _onReady(){
                if(typeof n ==='undefined' || n===null) return;
                if(n.imagesLoaded!==undefined) n.imagesLoaded++;
                if(n.imagesLoaded===n.imagesToLoad.length){
                    n.params.onImagesReady(n);
                }
            }
            for(var i=0;i<n.imagesToLoad.length;i++){
                n.loadImage(n.imagesToLoad[i],n.imagesToLoad[i].getAttribute('src'),_onReady);
            }
        };
        n.slideNext = function() {
            n.nextElement=n.currentElement.nextElementSibling;
            if(n.nextElement != null) {
                n.activeIndex++;
                n.wrapper.style.transitionDuration = n.params.duration + 'ms';
                n.wrapper.style.webkitTransitionDuration = n.params.duration + 'ms';
                if(n.params.direction != 'vertical') {
                    n.sldieMove -= n.wWidth;
                    n.wrapper.style.transform = "translate3d(" + n.sldieMove + "px,0,0)";
                    n.wrapper.style.webkitTransform = "translate3d(" + n.sldieMove + "px,0,0)";
                } else {
                    n.sldieMove -= n.wHeight;
                    n.wrapper.style.transform = "translate3d(0," + n.sldieMove + "px,0)";
                    n.wrapper.style.webkitTransform = "translate3d(0," + n.sldieMove + "px,0)";
                }
                n.currentElement = n.nextElement;
                if(n.nextElement!=null){
                    n.nextElement = n.nextElement.nextElementSibling;
                }
            }
        };
        n.slidePrev = function() {
            n.prevElement = n.currentElement.previousElementSibling;
            if(n.prevElement != null) {
                n.activeIndex--;
                n.wrapper.style.transitionDuration = n.params.duration + 'ms';
                n.wrapper.style.webkitTransitionDuration = n.params.duration + 'ms';
                if(n.params.direction != 'vertical') {
                    n.sldieMove += n.wWidth;
                    n.wrapper.style.transform = "translate3d(" + n.sldieMove + "px,0,0)";
                    n.wrapper.style.webkitTransform = "translate3d(" + n.sldieMove + "px,0,0)";
                } else {
                    n.sldieMove += n.wHeight;
                    n.wrapper.style.transform = "translate3d(0," + n.sldieMove + "px,0)";
                    n.wrapper.style.webkitTransform = "translate3d(0," + n.sldieMove + "px,0)";
                }
                n.nextElement = n.currentElement;
                n.currentElement = n.prevElement;
            }
        };
        n.onSlideChangeEnd=function(){
            n.params.onSlideChangeEnd(n);
        };
        n.addSlide=function(slide){
            n.wrapper.innerHTML += slide;
        };
        n.onTransitionEnd = function(elem, handler,capture) {
            elem.addEventListener('transitionend', handler,capture);
            elem.addEventListener('webkitTransitionEnd', handler,capture);
            elem.addEventListener('mozTransitionEnd', handler,capture);
        };
        n.onTransitionStart = function(elem, handler,capture) {
            elem.addEventListener('transitionstart', handler,capture);
            elem.addEventListener('webkitTransitionStart', handler,capture);
            elem.addEventListener('mozTransitionStart', handler,capture);
        };
        init();
        return n;
    }
    NSlide.prototype = {

    }
    window.NSlide = NSlide;
})();