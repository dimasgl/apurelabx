/*
m8slider.js 0.1
release date: 25 April 2013
author: toyo - http://dimas.muskay.org/m8slider/
license: GNU GPLv2
m8slider needs jquery
this is a self-explanatory code, please don't hesitate to read
*/

function m8core(config, type, cons) {
    if (config.working == null) {config.working = false;}
    if (config.current == null) {config.current = 0;}
    if (config.other == null) {config.other = 0;}
    if (!config.working && (type == '-' || type == '')) {
        //if (!$(config.m8).is(":hover") && config.pauseOnHover != null) {
            config.working = true;
            if (type == '-') {
                if (config.current == 0) {config.other = config.m8.children.length - 1;
                } else {config.other = config.current - 1;}
            } else if (type == '') {
                if (config.current == config.m8.children.length - 1) {config.other = 0;
                } else {config.other = config.current + 1;}
            }
            for (var i = 0; i < config.m8.children.length; i++) {
                if (i == config.current) {
                    config.m8.children[config.current].style.zIndex = '22';
                } else if (i == config.other) {
                    config.m8.children[config.other].style.zIndex = '23';
                    config.m8.children[config.other].style.left = type + config.m8.offsetWidth + 'px';
                } else {
                    config.m8.children[i].style.zIndex = '21';
                    config.m8.children[i].style.left = type + config.m8.offsetWidth + 'px';
                }
            }
            $(config.m8.children[config.current]).stop().animate({
                left: cons + config.m8.offsetWidth + 'px',
            }, config.time);
            $(config.m8.children[config.other]).stop().animate({
                left: '0',
            }, config.time, function() {
                config.working = false;
                config.current = config.other;
            });
        //}
    }
}

function m8prev(config) {
    m8core(config, '-', '');
}

function m8next(config) {
    m8core(config, '', '-');
}

function m8auto(config) {
    config.auto = true;
    setInterval(function() {
        m8next(config);
    }, config.duration);
}
