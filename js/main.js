jQuery(function ($) {
  /*--------- Menu ---------*/
  $('.sp_menu').on('click', function () {
    $('.sp_menu,.m_header_nav').toggleClass('active');
    return false;
  });

  /*--------- inview ---------*/
  $('.list-mv07').on(
    'inview',
    function (event, isInView, visiblePartX, visiblePartY) {
      if (isInView) {
        $(this).stop().addClass('mv07');
      }
    }
  );

  $('.list-mv08').on(
    'inview',
    function (event, isInView, visiblePartX, visiblePartY) {
      if (isInView) {
        $(this).stop().addClass('mv08');
      }
    }
  );

  /*--------- スティッキーヘッダー ---------*/
  $(function () {
    var $win = $(window),
      $cloneNav = $('.p_header').clone().addClass('clone-nav').appendTo('body'),
      showClass = 'is-show';

    $win.on('load scroll', function () {
      var value = $(this).scrollTop();
      if (value > 400) {
        $cloneNav.addClass(showClass);
      } else {
        $cloneNav.removeClass(showClass);
      }
    });
  });

  /*--------- News Works sp Categry ---------*/
  $('.cat_l_sp_btn').on('click', function () {
    $('#cat_m').toggleClass('active');
    return false;
  });
});

/*--------- Google map ---------*/
(function ($) {
  /*
   *  new_map
   *
   *  This function will render a Google Map onto the selected jQuery element
   *
   *  @type	function
   *  @date	8/11/2013
   *  @since	4.3.0
   *
   *  @param	$el (jQuery element)
   *  @return	n/a
   */

  function new_map($el) {
    // var
    var $markers = $el.find('.marker');

    // vars
    var args = {
      zoom: 10,
      center: new google.maps.LatLng(0, 0),
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      mapTypeControl: false, //マップタイプ コントロール
      fullscreenControl: false, //全画面表示コントロール
      streetViewControl: false, //ストリートビュー コントロール
      zoomControl: false, //ズーム コントロール
    };

    // create map
    var map = new google.maps.Map($el[0], args);

    // add a markers reference
    map.markers = [];

    // add markers
    $markers.each(function () {
      add_marker($(this), map);
    });

    // center map
    center_map(map);

    // return
    return map;
  }

  /*
   *  add_marker
   *
   *  This function will add a marker to the selected Google Map
   *
   *  @type	function
   *  @date	8/11/2013
   *  @since	4.3.0
   *
   *  @param	$marker (jQuery element)
   *  @param	map (Google Map object)
   *  @return	n/a
   */

  function add_marker($marker, map) {
    // var
    var latlng = new google.maps.LatLng(
      $marker.attr('data-lat'),
      $marker.attr('data-lng')
    );

    // create marker
    var marker = new google.maps.Marker({
      position: latlng,
      map: map,
    });

    // add to array
    map.markers.push(marker);

    // if marker contains HTML, add it to an infoWindow
    if ($marker.html()) {
      // create info window
      var infowindow = new google.maps.InfoWindow({
        content: $marker.html(),
      });

      // show info window when marker is clicked
      google.maps.event.addListener(marker, 'click', function () {
        infowindow.open(map, marker);
      });
    }
  }

  /*
   *  center_map
   *
   *  This function will center the map, showing all markers attached to this map
   *
   *  @type	function
   *  @date	8/11/2013
   *  @since	4.3.0
   *
   *  @param	map (Google Map object)
   *  @return	n/a
   */

  function center_map(map) {
    // vars
    var bounds = new google.maps.LatLngBounds();

    // loop through all markers and create bounds
    $.each(map.markers, function (i, marker) {
      var latlng = new google.maps.LatLng(
        marker.position.lat(),
        marker.position.lng()
      );

      bounds.extend(latlng);
    });

    // only 1 marker?
    if (map.markers.length == 1) {
      // set center of map
      map.setCenter(bounds.getCenter());
      map.setZoom(10);
    } else {
      // fit to bounds
      map.fitBounds(bounds);
    }
  }

  /*
   *  document ready
   *
   *  This function will render each map when the document is ready (page has loaded)
   *
   *  @type	function
   *  @date	8/11/2013
   *  @since	5.0.0
   *
   *  @param	n/a
   *  @return	n/a
   */
  // global var
  var map = null;

  $(document).ready(function () {
    $('.acf-map').each(function () {
      // create map
      map = new_map($(this));
    });
  });
})(jQuery);

// First we get the viewport height and we multiple it by 1% to get a value for a vh unit
let vh = window.innerHeight * 0.01;
// Then we set the value in the --vh custom property to the root of the document
document.documentElement.style.setProperty('--vh', `${vh}px`);

// We listen to the resize event
window.addEventListener('resize', () => {
  // We execute the same script as before
  let vh = window.innerHeight * 0.01;
  document.documentElement.style.setProperty('--vh', `${vh}px`);
});

// dark/light mode

let userMod = window.matchMedia('(prefers-color-scheme: dark)').matches;
let sMode = window.sessionStorage.getItem('user');
let el = document.documentElement;

if (sMode) {
  el.setAttribute('theme', sMode);
} else {
  if (userMod == true) {
    el.setAttribute('theme', 'dark');
  } else {
    el.setAttribute('theme', 'light');
  }
}

document.getElementById('changeMode').onclick = function () {
  let nowMode = el.getAttribute('theme');
  if (nowMode == 'dark') {
    el.setAttribute('theme', 'light');
    window.sessionStorage.setItem('user', 'light');
  } else {
    el.setAttribute('theme', 'dark');
    window.sessionStorage.setItem('user', 'dark');
  }
};

// // Button switcher ------------------------
// const btn = document.querySelector('.btn-mode');
// btn.addEventListener('change', () => {
//   if (btn.checked == true) {
//     // Dark
//     document.body.classList.remove('light-theme');
//     document.body.classList.add('dark-theme');
//   } else {
//     // Light
//     document.body.classList.remove('dark-theme');
//     document.body.classList.add('light-theme');
//   }
// });

// // Media Prefers color scheme ------------------------
// const darkModeMediaQuery = window.matchMedia('(prefers-color-scheme: dark)');
// const darkModeOn = darkModeMediaQuery.matches;

// if (darkModeOn) {
//   // Dark by OS default
//   btn.checked = true;
//   document.body.classList.add('dark-theme');
// }

// darkModeMediaQuery.addListener((e) => {
//   const darkModeOn = e.matches;
//   if (darkModeOn) {
//     // Dark
//     document.body.classList.remove('light-theme');
//     document.body.classList.add('dark-theme');
//     btn.checked = true;
//   } else {
//     // Light
//     document.body.classList.remove('dark-theme');
//     document.body.classList.add('light-theme');
//     btn.checked = false;
//   }
// });
