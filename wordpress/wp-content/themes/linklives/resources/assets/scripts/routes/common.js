export default {
  init() {
    $('.nav-toggle').click(function(e) {
      e.preventDefault()
      $('header').toggleClass('active')
    })
    $('.menu-item-has-children >a').click(function(e) {
      e.preventDefault();
      let $menuItem = $(this).parent()
      let $wrapper = $menuItem.find('.sub-menu-wrapper')

      if($menuItem.hasClass('active')) {
        $wrapper.css('height', 0)
        $menuItem.removeClass('active')
        $('body').removeClass('backdrop')
      } else if($('.menu-item-has-children').hasClass('active')) {
        $('.sub-menu-wrapper').css('height', 0)
        $wrapper.css('height', $menuItem.find('.container-fluid').innerHeight())
        $('.menu-item-has-children').removeClass('active')
        $menuItem.addClass('active')
      } else {
        $wrapper.css('height', $menuItem.find('.container-fluid').innerHeight())
        $menuItem.addClass('active')
        $('body').addClass('backdrop')
      }
    });

    $( window ).resize(function() {
      let $menuItem = $('.menu-item-has-children.active');
      let $wrapper = $menuItem.find('.sub-menu-wrapper');

      if($menuItem.length) {
        $wrapper.css('height', $menuItem.find('.container-fluid').innerHeight());
      }
    });

    $(window).click(function(e){
       if($(e.target).closest('.menu-top').length)
        return;
        $('.sub-menu-wrapper').css('height', 0)
        $('.menu-item-has-children').removeClass('active')
        $('body').removeClass('backdrop')
    });

    $('.tags-filter-open').click(function(e) {
      e.preventDefault()
      $('.tags-filter').addClass('active');
    });

    $('.tags-filter-close').click(function(e) {
      e.preventDefault()
      $('.tags-filter').removeClass('active');
    });

    // Modules
    $('.module-groupedlinks').each(function() {
      let $module = $(this)
      let groupCount = $module.find('.group-link').length

      $module.find('.group-link').click(function() {
        $module.find('.group-link').removeClass('active')
        $(this).addClass('active')

        let $translate = -100/groupCount*($(this).data('group')-1);
        let $translateY = 'translateY(' + $translate + '%)';

        $module.find('.links-animate').css({
          transform: $translateY,
          MozTransform: $translateY,
          WebkitTransform: $translateY,
          msTransform: $translateY,
       });
      })
    })

    $('.module-hero').each(function() {
      let $keyvisual = $(this).find('.keyvisual')
      let timelines = Math.floor((Math.random() * 7) + 5);

      for (let i = 0; i < timelines; i++) {
        let width = Math.floor((Math.random() * 100) + 20);
        let events = Math.floor((Math.random() * 4) + 2);
        let positionX = Math.floor((Math.random() * 140) -20);
        let positionY = 80/timelines * (i+1);

        var timeline = '<div class="timeline" id="timeline-' + i + '" style="width:' + width + '%; top:' + positionY + '%; left: ' + positionX + '%;">'

        for (let i = 0; i < events; i++) {
          let diameter = Math.floor((Math.random() * 40 ) + 8);
          let opacity = (Math.random() * .8).toFixed(2);
          let positionX = Math.floor((Math.random() * 100 ));
          //console.log(diameter + ' ' + opacity + ' ' + positionX)
          timeline += '<div class="event" id="event-' + i + '" style="width: ' + diameter + 'px; height:' + diameter + 'px; background-color: rgba(255,255,255,' + opacity + '); left:' + positionX + '%"></div>'
        }

        timeline += '</div>'

        $keyvisual.prepend(timeline)
      }

    });
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};