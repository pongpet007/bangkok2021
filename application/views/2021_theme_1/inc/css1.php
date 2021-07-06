<?/*---------------------- More CSS ---------------------- */?>

<?/*----------------------page index session Home ---------------------- */?>
<style type="text/css">
    #home1 {
        background-image: url(<?=base_url('image_new/bg/home1.jpg')?>);
        background-size: 100% 100%;
    }
    #home-bg-1 {
        background-image: url(<?=base_url('image_new/design-web/home1.jpg')?>);
        background-size: 100%;
    }
    #home-bg-2 {
        background-image: url(<?=base_url('image_new/design-web/home2.jpg')?>);
        background-size: 100%;
    }
    #home-bg-1 .style1 h1 , #home-bg-1 .style1 p , #home-bg-2 .style1 h1 , #home-bg-2 .style1 p {
        color: #ffffff;
    }
    #home-bg-1 .style1 h1 , #home-bg-2 .style1 h1 {
        font-size: 56px;
    }
    #home-bg-1 .style1 p , #home-bg-2 .style1 p {
        font-size: 26px;
        line-height: 26px;
    }
    #home-bg-1 .style1 button , #home-bg-2 .style1 button {
        font-size: 28px;
        height: 50px;
        width: 170px;
    }
    h1.timeline-new {
        text-align: center;
        color: #fff;
        font-size: 64px;
        line-height: 93.08px;
    }
    p.timeline-new {
        text-align: center;
        color: #fff;
        font-size: 37px;
        line-height: 42px;
    }
    p.timeline-new span {
        text-align: center;
        color: #529bc9;
        font-size: 37px;
        line-height: 42px;
    }
    img.timeline-new {
        padding-top: 100%;
    }
    #features h1 {
        font-size: 116px;
        color: #fff;
        text-align: center;
    }
    #features p {
        font-size: 58px;
        text-align: center;
        color: #fff;
    }
    .new-copyright {
        font-size: 24px;
        color: #fff;
    }

    @media (max-width: 767px) and (min-width: 300px){
    	
    }
    @media (max-width: 991px) and (min-width: 768px){

    }
    @media (max-width: 1199px) and (min-width: 992px){
        
    } 
    @media (max-width: 1369px) and (min-width: 1200px){
        
    }
    @media (max-width: 1690px) and (min-width: 1370px){
        
    }
    @media (min-width: 1691px){

    }
</style>

<style type="text/css">
    #abouts {
  width: 100%;
  height: 100vh;
  background: url("../img/hero-bg.jpg") top center;
  background-size: cover;
  position: relative;
}

#abouts:before {
  content: "";
  background: rgba(0, 0, 0, 0.6);
  position: absolute;
  bottom: 0;
  top: 0;
  left: 0;
  right: 0;
}

#abouts .container {
  position: relative;
  padding-top: 74px;
  text-align: center;
}

#abouts h1 {
  margin: 0;
  font-size: 56px;
  font-weight: 700;
  line-height: 64px;
  color: #fff;
  font-family: "Poppins", sans-serif;
}

#abouts h1 span {
  color: #ffc451;
}

#abouts h2 {
  color: rgba(255, 255, 255, 0.9);
  margin: 10px 0 0 0;
  font-size: 24px;
}

#abouts .icon-box {
  padding: 30px 20px;
  transition: ease-in-out 0.3s;
  border: 1px solid rgba(255, 255, 255, 0.3);
  height: 100%;
  text-align: center;
}

#abouts .icon-box i {
  font-size: 32px;
  line-height: 1;
  color: #ffc451;
}

#abouts .icon-box h3 {
  font-weight: 700;
  margin: 10px 0 0 0;
  padding: 0;
  line-height: 1;
  font-size: 20px;
  line-height: 26px;
}

#abouts .icon-box h3 a {
  color: #fff;
  transition: ease-in-out 0.3s;
}

#abouts .icon-box h3 a:hover {
  color: #ffc451;
}

#abouts .icon-box:hover {
  border-color: #ffc451;
}

@media (min-width: 1024px) {
  #abouts {
    background-attachment: fixed;
  }
}

@media (max-width: 768px) {
  #abouts {
    height: auto;
  }
  #abouts h1 {
    font-size: 28px;
    line-height: 36px;
  }
  #abouts h2 {
    font-size: 20px;
    line-height: 24px;
  }
}
</style>
<style type="text/css">


    *,
    *::after,
    *::before {
        box-sizing: border-box;
    }

    a.timelines {
        color: #529BC9;
        text-decoration: none;
    }
    .cd-horizontal-timeline::before {
        /* never visible - this is used in jQuery to check the current MQ */
        content: 'mobile';
        display: none;
    }

    .cd-horizontal-timeline.loaded {
        /* show the timeline after events position has been set (using JavaScript) */
        opacity: 1;
    }

    .cd-horizontal-timeline .timeline {
        position: relative;
        height: 100px;
        margin: 0 auto;
    }

    .cd-horizontal-timeline .events-wrapper {
        position: relative;
        height: 100%;
        overflow: hidden;
    }

    .cd-horizontal-timeline .events {
        /* this is the grey line/timeline */
        position: absolute;
        z-index: 1;
        left: 0;
        top: 49px;
        height: 2px;
        /* width will be set using JavaScript */
        background: #dfdfdf;
        -webkit-transition: -webkit-transform 0.4s;
        -moz-transition: -moz-transform 0.4s;
        transition: transform 0.4s;
    }

    .cd-horizontal-timeline .filling-line {
        /* this is used to create the green line filling the timeline */
        position: absolute;
        z-index: 1;
        left: 0;
        top: 0;
        height: 100%;
        width: 100%;
        background-color: #529BC9;
        -webkit-transform: scaleX(0);
        -moz-transform: scaleX(0);
        -ms-transform: scaleX(0);
        -o-transform: scaleX(0);
        transform: scaleX(0);
        -webkit-transform-origin: left center;
        -moz-transform-origin: left center;
        -ms-transform-origin: left center;
        -o-transform-origin: left center;
        transform-origin: left center;
        -webkit-transition: -webkit-transform 0.3s;
        -moz-transition: -moz-transform 0.3s;
        transition: transform 0.3s;
    }

    .cd-horizontal-timeline .events a {
        position: absolute;
        bottom: 0;
        z-index: 2;
        text-align: center;
        font-size: 1.3rem;
        padding-bottom: 15px;
        color: #fff;
        /* fix bug on Safari - text flickering while timeline translates */
        -webkit-transform: translateZ(0);
        -moz-transform: translateZ(0);
        -ms-transform: translateZ(0);
        -o-transform: translateZ(0);
        transform: translateZ(0);
    }

    .cd-horizontal-timeline .events a::after {
        /* this is used to create the event spot */
        content: '';
        position: absolute;
        left: 50%;
        right: auto;
        -webkit-transform: translateX(-50%);
        -moz-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
        -o-transform: translateX(-50%);
        transform: translateX(-50%);
        bottom: -5px;
        height: 12px;
        width: 12px;
        border-radius: 50%;
        border: 2px solid #dfdfdf;
        background-color: #f8f8f8;
        -webkit-transition: background-color 0.3s, border-color 0.3s;
        -moz-transition: background-color 0.3s, border-color 0.3s;
        transition: background-color 0.3s, border-color 0.3s;
    }

    .no-touch .cd-horizontal-timeline .events a:hover::after {
        background-color: #529BC9;
        border-color: #529BC9;
    }

    .cd-horizontal-timeline .events a.selected {
        pointer-events: none;
    }

    .cd-horizontal-timeline .events a.selected::after {
        background-color: #529BC9;
        border-color: #529BC9;
    }

    .cd-horizontal-timeline .events a.older-event::after {
        border-color: #529BC9;
    }

    @media only screen and (min-width: 1100px) {
        .cd-horizontal-timeline::before {
            /* never visible - this is used in jQuery to check the current MQ */
            content: 'desktop';
        }
    }

    .cd-timeline-navigation a {
        /* these are the left/right arrows to navigate the timeline */
        position: absolute;
        z-index: 1;
        top: 50%;
        bottom: auto;
        -webkit-transform: translateY(-50%);
        -moz-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        -o-transform: translateY(-50%);
        transform: translateY(-50%);
        height: 34px;
        width: 34px;
        border-radius: 50%;
        border: 2px solid #dfdfdf;
        /* replace text with an icon */
        overflow: hidden;
        color: transparent;
        text-indent: 100%;
        white-space: nowrap;
        -webkit-transition: border-color 0.3s;
        -moz-transition: border-color 0.3s;
        transition: border-color 0.3s;
    }

    .cd-timeline-navigation a::after {
        /* arrow icon */
        content: '';
        position: absolute;
        height: 16px;
        width: 16px;
        left: 50%;
        top: 50%;
        bottom: auto;
        right: auto;
        -webkit-transform: translateX(-50%) translateY(-50%);
        -moz-transform: translateX(-50%) translateY(-50%);
        -ms-transform: translateX(-50%) translateY(-50%);
        -o-transform: translateX(-50%) translateY(-50%);
        transform: translateX(-50%) translateY(-50%);
        background: url(../img/cd-arrow.svg) no-repeat 0 0;
    }

    .cd-timeline-navigation a.prev {
        left: 0;
        -webkit-transform: translateY(-50%) rotate(180deg);
        -moz-transform: translateY(-50%) rotate(180deg);
        -ms-transform: translateY(-50%) rotate(180deg);
        -o-transform: translateY(-50%) rotate(180deg);
        transform: translateY(-50%) rotate(180deg);
    }

    .cd-timeline-navigation a.next {
        right: 0;
    }

    .no-touch .cd-timeline-navigation a:hover {
        border-color: #529BC9;
    }

    .cd-timeline-navigation a.inactive {
        cursor: not-allowed;
    }

    .cd-timeline-navigation a.inactive::after {
        background-position: 0 -16px;
    }

    .no-touch .cd-timeline-navigation a.inactive:hover {
        border-color: #dfdfdf;
    }

    .cd-horizontal-timeline .events-content {
        position: relative;
        width: 100%;
        overflow: hidden;
        -webkit-transition: height 0.4s;
        -moz-transition: height 0.4s;
        transition: height 0.4s;
    }

    .cd-horizontal-timeline .events-content li {
        position: absolute;
        z-index: 1;
        width: 100%;
        left: 0;
        top: 0;

        opacity: 0;
        -webkit-animation-duration: 0.4s;
        -moz-animation-duration: 0.4s;
        animation-duration: 0.4s;
        -webkit-animation-timing-function: ease-in-out;
        -moz-animation-timing-function: ease-in-out;
        animation-timing-function: ease-in-out;
    }

    .cd-horizontal-timeline .events-content li.selected {
        /* visible event content */
        position: relative;
        z-index: 2;
        opacity: 1;
        -webkit-transform: translateX(0);
        -moz-transform: translateX(0);
        -ms-transform: translateX(0);
        -o-transform: translateX(0);
        transform: translateX(0);
    }

    .cd-horizontal-timeline .events-content li.enter-right,
    .cd-horizontal-timeline .events-content li.leave-right {
        -webkit-animation-name: cd-enter-right;
        -moz-animation-name: cd-enter-right;
        animation-name: cd-enter-right;
    }

    .cd-horizontal-timeline .events-content li.enter-left,
    .cd-horizontal-timeline .events-content li.leave-left {
        -webkit-animation-name: cd-enter-left;
        -moz-animation-name: cd-enter-left;
        animation-name: cd-enter-left;
    }

    .cd-horizontal-timeline .events-content li.leave-right,
    .cd-horizontal-timeline .events-content li.leave-left {
        -webkit-animation-direction: reverse;
        -moz-animation-direction: reverse;
        animation-direction: reverse;
    }
    .cd-horizontal-timeline .events-content h2 {
        font-weight: bold;
        font-size: 2.6rem;
        font-weight: 700;
        line-height: 1.2;
    }

    .cd-horizontal-timeline .events-content em {
        display: block;
        font-style: italic;
        margin: 10px auto;
    }

    .cd-horizontal-timeline .events-content em::before {
        content: '- ';
    }

    @media only screen and (min-width: 768px) {
        .cd-horizontal-timeline .events-content h2 {
            font-size: 7rem;
        }
        .cd-horizontal-timeline .events-content em {
            font-size: 2rem;
        }
    }

    @-webkit-keyframes cd-enter-right {
        0% {
            opacity: 0;
            -webkit-transform: translateX(100%);
        }
        100% {
            opacity: 1;
            -webkit-transform: translateX(0%);
        }
    }

    @-moz-keyframes cd-enter-right {
        0% {
            opacity: 0;
            -moz-transform: translateX(100%);
        }
        100% {
            opacity: 1;
            -moz-transform: translateX(0%);
        }
    }

    @keyframes cd-enter-right {
        0% {
            opacity: 0;
            -webkit-transform: translateX(100%);
            -moz-transform: translateX(100%);
            -ms-transform: translateX(100%);
            -o-transform: translateX(100%);
            transform: translateX(100%);
        }
        100% {
            opacity: 1;
            -webkit-transform: translateX(0%);
            -moz-transform: translateX(0%);
            -ms-transform: translateX(0%);
            -o-transform: translateX(0%);
            transform: translateX(0%);
        }
    }

    @-webkit-keyframes cd-enter-left {
        0% {
            opacity: 0;
            -webkit-transform: translateX(-100%);
        }
        100% {
            opacity: 1;
            -webkit-transform: translateX(0%);
        }
    }

    @-moz-keyframes cd-enter-left {
        0% {
            opacity: 0;
            -moz-transform: translateX(-100%);
        }
        100% {
            opacity: 1;
            -moz-transform: translateX(0%);
        }
    }

    @keyframes cd-enter-left {
        0% {
            opacity: 0;
            -webkit-transform: translateX(-100%);
            -moz-transform: translateX(-100%);
            -ms-transform: translateX(-100%);
            -o-transform: translateX(-100%);
            transform: translateX(-100%);
        }
        100% {
            opacity: 1;
            -webkit-transform: translateX(0%);
            -moz-transform: translateX(0%);
            -ms-transform: translateX(0%);
            -o-transform: translateX(0%);
            transform: translateX(0%);
        }
    }

      </style>