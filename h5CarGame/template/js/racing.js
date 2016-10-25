/**
 * Created by hure on 2016/10/25.
 */
var config = {
    CANVAS_WIDTH: window.innerWidth,
    CANVAS_HEIGHT: window.innerHeight,
    height: 1136,
    item: 70,
    roadH: 60 * 1136
};

var loadGroup = gameGroup = resultGroup = null;
var begin = rulePage = gamePage = null;
var car = score = null;
var total = 0;
var blood = 5;
var canvas = null;
var quickened = false;
var speed = 15;
var quickenTime = 30;
var bloods = document.querySelectorAll(".blood i");
var gw = timeout = canGetHeight = 0;
var game = new Phaser.Game(config.CANVAS_WIDTH, config.CANVAS_HEIGHT, Phaser.AUTO, 'game');
game.states = {};
game.states.boot = function() {
    this.preload = function() {
        if(!game.device.desktop) {
            this.scale.forcePortrait = true;
            game.scale.refresh();
        }
    }
    this.create = function() {
        game.world.setBounds(0, -config.roadH, config.CANVAS_WIDTH, config.roadH);
        game.state.start('preload');
    }
};
game.states.preload = function() {
    this.preload = function() {
        for(var i = 0; i < 14; i++) {
            game.load.image('bg' + i, 'images/bg' + i + '.png');
        };
        game.load.image('bread1', 'images/gold.png');
        game.load.image('bread2', 'images/dd.png');
        game.load.image('bread3', 'images/blood.png');
        game.load.image('bread4', 'images/speed.png');
        game.load.image('bombcrack', '/Public/images/pie/bombcrack2.png');
        for(var i = 1; i < 5; i++) {
            game.load.image('btn' + i, 'images/btn' + i + '.png');
            game.load.image('floor' + i, 'images/roads' + i + '.jpg');
            game.load.image('car' + i, 'images/car' + i + '.png');
        };
        loadGroup = game.add.group();
        game.add.text(game.world.centerX - 30, game.world.centerY, '0%', {
            fill: '#fff'
        }, loadGroup).anchor.setTo(0, 0);
        game.load.onFileComplete.add(function() {
            loadGroup.getChildAt(0).text = game.load.progress + '%';
        }, this);
    }
    this.create = function() {
        gamePage = document.getElementById("game");
        gamePage.style.transition = "none";
        gamePage.style.webkitTransition = "none";
        canvas = document.getElementById('bg');
        var ctx = canvas.getContext('2d');
        canvas.width = config.CANVAS_WIDTH;
        canvas.height = config.CANVAS_HEIGHT;
        var num = 0;
        var buttons = [];
        function drawBg() {
            ctx.clearRect(0, 0, config.CANVAS_WIDTH, config.CANVAS_HEIGHT);
            var img = new Image();
            img.src = '/Public/images/game/racing/js/bg' + num + '.png';
            ctx.drawImage(img, 0, 0, config.CANVAS_WIDTH, config.CANVAS_HEIGHT);
            num++;
            if(num >= 13) {
                clearInterval(timers);
                ctx.fillStyle = "#fff";
                ctx.font = "40px bold Arial";
                var title = '选择赛道';
                ctx.fillText(title, (config.CANVAS_WIDTH - ctx.measureText(title).width) / 2, 120);

                function btnClick() {
                    var w = 8;
                    ctx.strokeStyle = "#34a4e4";
                    ctx.lineWidth = w;
                    ctx.strokeRect(this.x - w, this.y - w, this.w + w * 2, this.h + w * 2);
                };
                var btn = new Buttons(100, 200, 200, 150, 'images/racing_logo.png', btnClick);
                buttons.push(btn);
                for(var i = 0; i < buttons.length; i++) {
                    var b = buttons[i];
                    b.index = i + 1;
                    drawLevel(b.x, b.y, b.w, b.h, b.img);
                };
                document.querySelector(".btns").style.display='block';
            }
        };
        function drawLevel(x, y, w, h, img) {
            var im = new Image();
            im.onload = function() {
                ctx.drawImage(im, x, y, w, h);
            };
            im.src = img;
            var ww = 8;
            ctx.strokeStyle = "#fff";
            ctx.lineWidth = ww;
            ctx.strokeRect(x - ww, y - ww, w + ww * 2, h + ww * 2);
        };
        function Buttons(x, y, w, h, img, clickEvent) {
            this.x = x;
            this.img = img;
            this.y = y;
            this.w = w;
            this.h = h;
            this.click = clickEvent;
        };
        var isTouch = false;
        function touchEvent() {
            var touchstart = touchmove = touchend = null;
            if('ontouchstart' in window) {
                touchstart = 'touchstart';
                touchmove = 'touchmove';
                touchend = 'touchend';
                isTouch = true;
            } else {
                touchstart = 'mousedown';
                touchmove = 'mousemove';
                touchend = 'mouseup';
            };
            var point = {
                x: 0,
                y: 0
            };
            var isFirstTouch = false;
            function touchStart(e) {
                e = e || window.event;
                if(isTouch) {
                    e = e.touches[0];
                };
                point.x = e.pageX - this.offsetLeft;
                point.y = e.pageY - this.offsetTop;
                for(var i = 0; i < buttons.length; i++) {
                    var ww = 8;
                    ctx.strokeStyle = "#fff";
                    ctx.lineWidth = ww;
                    ctx.strokeRect(buttons[i].x - ww, buttons[i].y - ww, buttons[i].w + ww * 2, buttons[i].h + ww * 2);
                    if(isInClick(point.x, point.y, buttons[i])) {
                        buttons[i].click();
                        canvas.clickBtn = buttons[i];
                        floor = game.add.tileSprite(0, -config.roadH, config.CANVAS_WIDTH, config.roadH, 'floor' + canvas.clickBtn.index);

                    }
                };
            };

            function touchEnd(e) {
            };
            canvas.addEventListener(touchend, touchEnd, false);
            canvas.addEventListener(touchstart, touchStart, false);
        };
        function isInClick(pageX, pageY, btn) {
            if(pageX > btn.x && pageX < (btn.x + btn.w) && pageY > btn.y && pageY < (btn.y + btn.h)) {
                return true;
            };
            return false;
        };
        setTimeout(function() {
            game.load.onFileComplete.removeAll();
            loadGroup.visible = false;
            var num = 0;
            var loading = document.querySelector('.loading-page');
            var loadingNum = document.querySelector('.loading-num');
            var left = document.querySelector('.left');
            var right = document.querySelector('.right');
            var range = 10;
            var timer = null;
            timer = setInterval(function() {
                range += 10;
                num += Math.floor(100 / 36);
                loadingNum.innerHTML = num + '%';
                if(range <= 180) {
                    left.style.webkitTransform = 'rotate(' + range + 'deg)';
                    left.style.transform = 'rotate(' + range + 'deg)';
                } else {
                    right.style.background = '#afe4dd';
                    if(range <= 360) {
                        right.style.webkitTransform = 'rotate(' + range + 'deg)';
                        right.style.transform = 'rotate(' + range + 'deg)';
                    } else {
                        clearInterval(timer);
                        loadingNum.innerHTML = '100%';
                        loading.style.display = 'none';
                        drawBg();
                        timers = setInterval(drawBg, 100);
                        touchEvent();
                    };
                };
            }, 20);
        }, 200);
    }
};
var isMoved = false;
game.states.play = function() {
    this.create = function() {
        game.physics.startSystem(Phaser.Physics.Arcade);
        floor = game.add.tileSprite(0, -config.roadH, config.CANVAS_WIDTH, config.roadH, 'floor' + canvas.clickBtn.index);
        gameGroup = game.add.group();
        gameGroup.enableBody = true;
        car = game.add.sprite(game.world.centerX, 0, 'car' + canvas.clickBtn.index);
        switch(canvas.clickBtn.index) {
            case 1:
                car.scale.setTo(.2, .2);
                break;
            case 2:
            case 3:
            case 4:
                car.scale.setTo(.3, .3);
                break;
        };
        car.anchor.setTo(.5, .5);
        car.y = 0;
        game.camera.follow(car);
        game.physics.enable(car, Phaser.Physics.ARCADE);
        if(window.DeviceOrientationEvent) {
            window.addEventListener('deviceorientation', handleOrientation, true);
            isNoOrientation=false;
        }else{
            car.inputEnabled=true;
            car.inputEnabled=true;
            car.input.enableDrag();
            isNoOrientation=true;
        };
        game.add.group(gameGroup);
        resultGroup = game.add.group();
        var scoreText = game.add.text(140, -1116, "score�?", {
            font: '34px SimHei',
            fill: '#fff'
        }, resultGroup);
        scoreText.fixedToCamera = true;
        score = game.add.text(240, -1116, '0', {
            font: '34px SimHei',
            fill: '#fff'
        }, resultGroup);
        score.fixedToCamera = true;
        var perWidth = car.width;
        gw = (config.CANVAS_WIDTH - perWidth) / 2;
        canGetHeight = game.height - car.height - 20;
        for(var i = 0; i < config.item; i++) {
            createBarItem();
        };
        dropItems = gameGroup.getChildAt(0);
        isEnd = false;
        document.getElementById("mic").play();
    }
    this.update = function() {
        var centerX = game.world.centerX;
        var gameHeight = game.height;
        car.x > centerX + gw - 120 && (car.x = centerX + gw - 120);
        car.x < centerX - gw + 120 && (car.x = centerX - gw + 120);
        if(!isEnd && !isNoOrientation) {
            Math.abs(car.y) >= game.world.height - car.height / 2 ? car.y = car.height / 2 - game.world.height : car.y -= speed;
        };
        dropItems.forEach(function(b) {
            game.physics.arcade.collide(b, car, null, function() {
                if(b.y < canGetHeight) {
                    if(b.dropType == 'car') {
                        b.destroy();
                        total += 100;
                        score.text = total;
                    } else if(b.dropType == 'blood') {
                        b.destroy();
                        if(blood < 5) {
                            blood += 1;
                            bloods[blood - 1].classList.remove('fa-heart-o');
                            bloods[blood - 1].classList.add('fa-heart');
                        }
                    } else if(b.dropType == 'quicken') {
                        if(speed == 15) {
                            speed = 25;
                            quickened = true;
                            if(quickened) {
                                console.log(1);
                                tim = setInterval(function() {
                                    if(quickenTime <= 0) {
                                        clearInterval(tim);
                                        speed = 15;
                                        quickened = false;
                                        quickenTime=30;
                                    } else {
                                        quickenTime--;
                                    }
                                }, 100);
                            };
                        };
                        b.destroy();
                    } else {
                        bloods[blood - 1].classList.remove('fa-heart');
                        bloods[blood - 1].classList.add('fa-heart-o');
                        blood--;
                        game.camera.flash(0xff0000, 300);
                        game.camera.shake(0.01, 300);
                        if(blood <= 0) {
                            game.time.events.removeAll();
                            gameGroup.getChildAt(0).destroy();
                            var bomb = game.add.sprite(car.x, car.y, 'bombcrack');
                            bomb.anchor.setTo(.5, .5);
                            bomb.scale.setTo(.3, .3);
                            isEnd=true;
                            game.add.tween(bomb.scale).to({
                                x: 2,
                                y: 2
                            }, 300).start().onComplete.add(function() {
                                    isEnd = true;
                                    document.getElementById("mic").pause();
                                });
                        } else {
                            b.destroy();
                        };
                    };
                    document.querySelector('.score').innerHTML='分数�?'+total;
                } else {
                    b.destroy();
                }
            });
        });
        cursors = game.input.keyboard.createCursorKeys();
        car.body.velocity.x = 0;
        if(cursors.left.isDown) {
            car.body.velocity.x = -500;
        } else if(cursors.right.isDown) {
            car.body.velocity.x = 500;
        } else {
            car.animations.stop();
        }
    };
};

var DROP_TYPE = ['car', 'bomb', 'blood', 'quicken'];
function createBarItem() {
    var random = Math.random();
    if(random < 0.7) {
        index = 1;
    } else if(random > 0.7 && random < 0.8) {
        index = 4;
    } else if(random > 0.8 && random < 0.95) {
        index = 2;
    } else if(random > 0.95 && random < 1) {
        index = 3;
    };
    var x = game.world.width * Math.random() - 40;
    var y = game.world.randomY;
    if(x < 140) {
        x = 140;
    } else if(x > config.CANVAS_WIDTH - 120) {
        x = config.CANVAS_WIDTH - 170;
    };
    if(Math.abs(y) < 200) {
        y = -220;
    };
    var dropItem = game.add.sprite(x, y, 'bread' + index);
    var type = DROP_TYPE[index - 1];
    dropItem.dropType = type;
    if(type == 'car') {
        dropItem.scale.setTo(.3, .3);
    }else if(type=='bomb'){
        dropItem.scale.setTo(.3, .3);
    } else if(type=='quicken'){
        dropItem.scale.setTo(.3, .3);
    }else {
        dropItem.scale.setTo(.5, .5);
    };
    game.physics.arcade.enable(dropItem);
    gameGroup.getChildAt(0).add(dropItem);
};

var oldGamma=0;
function handleOrientation(orientData) {
    var absolute = orientData.absolute;
    var alpha = orientData.alpha;
    var beta = orientData.beta;
    var gamma = orientData.gamma;
    if(car != null && !isEnd) {
        var s=500*Math.abs(gamma-oldGamma);
        if(gamma < 0 && Math.abs(gamma) > 10) {
            car.body.velocity.x = -s;
        } else if(gamma > 0 && gamma > 10) {
            car.body.velocity.x = s;
        } else {
            car.body.velocity.x = 0;
        }
    };
    oldGamma=gamma;
};

game.state.add('boot', game.states.boot);
game.state.add('preload', game.states.preload);
game.state.add('play', game.states.play);

game.state.start('boot');