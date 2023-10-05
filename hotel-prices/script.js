( function($) {
  $( function() {
    
    //highlight currency on page load
    let curr = parseQuery( window.location.search ).CURRENCY;
    if ( curr ) {          
      document.querySelectorAll('.b-hotel-currencies').forEach((curBlock) => {
        let item = curBlock.querySelector( `.b-hotel-currencies [data-code="${curr}"]` ),
            itemNum = item.className.slice(-1),
            queryObj = window.location.search ? parseQuery( window.location.search ) : {};
        
        //highlight currency
        curBlock.classList.remove( 'b-hotel-currencies--1', 'b-hotel-currencies--2', 'b-hotel-currencies--3' );
        curBlock.classList.add( `b-hotel-currencies--${itemNum}` );
      });
    }
    
    //switch currency
    if (document.querySelector('.b-hotel-currencies')) {
      document.querySelectorAll('.b-hotel-currencies').forEach((curBlock) => {
        curBlock.addEventListener( 'click', (e) => {
          e.preventDefault();
          
          let item = e.target;
              itemNum = item.className.slice(-1),
              queryObj = window.location.search ? parseQuery( window.location.search ) : {};
          
          //highlight currency
          curBlock.classList.remove( 'b-hotel-currencies--1', 'b-hotel-currencies--2', 'b-hotel-currencies--3' );
          curBlock.classList.add( `b-hotel-currencies--${itemNum}` );
          
          //set URL
          queryObj.CURRENCY = item.getAttribute( 'data-code' );
          
          setUrl( queryObj );
          sendFilterData( queryObj );
          
        });
      });
    }
    
    async function sendFilterData( queryObj ) {
      
      if (!window.hotelFilterStore) return;
      
      let result;
      let response;
      
      //fetch
      response = await fetch(
        `${ window.hotelFilterStore.fetchUrl.hotelRoomsGallery }&${ getQuery( queryObj )}`,
        {
          method: 'GET',
        }
      );

      result = await response.json();
      
      //destroy gallery
      if (window.hotelRoomsSwiper && window.hotelRoomsSwiper.destroy) {
        window.hotelRoomsSwiper.destroy();
      }
      if (
        typeof result === 'object' &&
        result.STATUS &&
        result.STATUS === 'Y'
      ) {
        changeHotelRooms(result.HTML.gallery);
      }
    }
    
    function changeHotelRooms( html ) {
      if (!document.querySelector('.b-hotel-rooms')) {
        return;
      }

      //swiper
      const div = document.querySelector('.b-hotel-rooms .swiper-container');
      div.innerHTML = html;

      //swiper
      if (!window.Swiper) return;
      window.hotelRoomsSwiper = new window.Swiper(
        '.b-hotel-rooms .swiper-container',
        {
          slidesPerView: 1.1,
          freeMode: true,
          spaceBetween: 10,
          navigation: {
            nextEl: '#roomsSwiperNext',
            prevEl: '#roomsSwiperPrev',
          },
          breakpoints: {
            1400: {
              spaceBetween: 30,
              slidesPerView: 3,
            },
            1200: {
              spaceBetween: 30,
              slidesPerView: 3,
            },
            992: {
              spaceBetween: 30,
              slidesPerView: 2.2,
            },
            768: {
              spaceBetween: 30,
              slidesPerView: 1.8,
            },
            576: {
              spaceBetween: 30,
              slidesPerView: 1.5,
            },
          },
        }
      );

      //scroll
      setTimeout(() => {
        if (
          document.querySelector('.b-hotel-rooms')
        ) {
          window.scrollTo({
            top:
              document.querySelector('.b-hotel-rooms').getBoundingClientRect()
                .top + window.scrollY,
            behavior: 'smooth',
          });
        } else if (document.getElementById('sendMessage')) {
          window.scrollTo({
            top:
              document.getElementById('sendMessage').getBoundingClientRect()
                .top +
              window.scrollY -
              100,
            behavior: 'smooth',
          });
        }
      }, 500);
    }
    
    function setUrl( queryObject ) {
      //get query
      result = '?' + getQuery( queryObject );
      window.history.replaceState({}, '', result);
    }
    
    function parseQuery( queryString ) {
      var query = {};
      var pairs = ( queryString[0] === '?' ? queryString.substr(1) : queryString ).split('&');
      for ( var i = 0; i < pairs.length; i++ ) {
        var pair = pairs[i].split( '=' );
        query[ decodeURIComponent( pair[0]) ] = decodeURIComponent( pair[1] || '' );
      }
      return query;
    }
    
    function getQuery( queryObject ) {
      var result = [];
      for ( var k in queryObject ) {
        result.push( k + '=' + queryObject[k]);
      }
      return result.join( '&' );
    }
    
    //hotel request
    if (document.getElementById('hotelRequest') && document.querySelector('.b-hotel-message')) {
      document.getElementById('hotelRequest').querySelector('.b-button').addEventListener('click', function(e) {
        e.preventDefault();
        window.scrollTo({top: document.querySelector('.b-hotel-message').getBoundingClientRect().top - 30 + window.scrollY, behavior: 'smooth'});
      });
    }
    
    //hotel rooms
    if (document.querySelector('.b-hotel-rooms') && document.querySelector('.b-hotel-message')) {
      document.querySelector('.b-hotel-rooms').addEventListener('click', function(e) {
        if (e.target.className.includes('b-button')) {
          e.preventDefault();
          window.scrollTo({top: document.querySelector('.b-hotel-message').getBoundingClientRect().top - 30 + window.scrollY, behavior: 'smooth'});
        }
      })
    }
    
    //scroll to
    if (document.querySelector('.b-hotel-rooms h3')) {
      document.querySelector('.b-hotel-rooms h3').addEventListener('click', () => {
        window.scrollTo({top: document.getElementById('hotelFilter').getBoundingClientRect().top - 50 + window.scrollY, behavior: 'smooth'})
      });
    }
    
    //heading dropdown
    /*document.querySelectorAll( '.b-heading-dropdown' ).forEach( function( dropdown ) {
      
      var dropdownTitle = dropdown.querySelector( '.b-heading-dropdown-title' );
      var dropdownBody = dropdown.querySelector( '.b-heading-dropdown-body' );
      
      //open dropdown
      dropdownTitle.parentNode.addEventListener( 'click', function(e) {
        e.preventDefault();
        e.stopPropagation();
        dropdownBody.classList.add( 'i-dropdown' );
      });
      
      //close dropdown
      document.addEventListener( 'click', function(e) {
        if ( e.target.className.search( 'b-heading-dropdown-body' ) !== -1 ) {
          return;
        }
        dropdownBody.classList.remove( 'i-dropdown' );
      });
      
      dropdownBody.querySelectorAll( 'a', 'span' ).forEach( function( elem ) {
        elem.addEventListener( 'click', function(e) {
          e.preventDefault();
          e.stopPropagation();
          //hide dropdown
          dropdownBody.classList.remove( 'i-dropdown' );
          //change content
          if ( elem.tagName.toLowerCase() === 'a' ) {
            dropdownTitle.innerText = elem.textContent;
          }
          //fetch data
          (async () => {
            try {
              let response = await fetch( elem.getAttribute('href') );
              let roomsObject = (await response.json()).ROOMS;
              dropdownActions( roomsObject, dropdown );
            } catch (err) {
              console.log(err);
            }
          })();
        });
      });
    });*/
    
    function dropdownActions( roomsObject, dropdown ) {
      dropdown.closest( '.b-hotel-rooms' ).querySelectorAll( '.b-room-card' ).forEach( function( roomCard ) {
        roomsObject.forEach( function( roomObj ) {
          if ( String( roomCard.getAttribute( 'data-id' )) === String( roomObj.id )) {
            roomCard.querySelector( '.b-room-card__price b' ).innerText = roomObj.price;
            roomCard.querySelector( '.b-room-card__days' ).innerText = roomObj.days;
            roomCard.querySelectorAll( 'input' )[0].value = String( roomObj.price ).replace(' ', '').match( /[\d\.]*/g )[0];
            roomCard.querySelectorAll( 'input' )[1].value = String( roomObj.days ).replace(' ', '').match( /\d*/g )[0];
          }
        });
      });
    }
    
    //placeholders
    setTimeout( function() {
      $( '.b-ph-block' ).addClass( 'i-ph-animated' );
    }, 1000 );
    
    //show map modal
    /*document.querySelector( '.b-hotel-map' ).addEventListener( 'click', showMapModal );
    
    function showMapModal(e) {
      e.preventDefault();
      document.querySelector( '.b-map-modal' ).classList.add( 'show-modal' );
      setTimeout( function() {
        document.querySelector( '.b-map-modal' ).classList.add( 'animate' );
      }, 100);
    }*/
    
    //show gallery modal
    if (document.querySelector( '.b-header-gallery__icon' )) {
      document.querySelector( '.b-header-gallery__icon' ).addEventListener( 'click', showGalleryModal );
    }
    if (document.querySelector( '.b-hotel-preview__num' )) {
      document.querySelector( '.b-hotel-preview__num' ).addEventListener( 'click', showGalleryModal );
      document.querySelectorAll( '.b-hotel-preview__item' ).forEach( function( item ) {
        item.addEventListener( 'click', showGalleryModal);
      });
    }
    
    function showGalleryModal(e) {
      e.preventDefault();
      document.querySelector( '.b-gallery-modal' ).classList.add( 'show-modal' );
      setTimeout( function() {
        document.querySelector( '.b-gallery-modal' ).classList.add( 'animate' );
      }, 100);
    
      //modal gallery
      new Swiper( '.b-gallery-modal .swiper-container', {
        slidesPerView: .3,
        spaceBetween: 10,
        centeredSlides: true,
        preloadImages: false,
        lazy: true,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        breakpoints: {
          767: {
            slidesPerView: 2,
            spaceBetween: 0
          }
        }
      });
    }
    
    //modal close
    document.querySelectorAll( '.b-modal__close' ).forEach( function( closeIcon ) {
      closeIcon.addEventListener( 'click', function(e) {
        e.preventDefault();
        e.target.closest( '.b-modal' ).classList.remove( 'animate' );
        setTimeout( function() {
          e.target.closest( '.b-modal' ).classList.remove( 'show-modal' );
        }, 500);
      });
    });
    document.documentElement.addEventListener( 'click', function(e) {
      if ( e.target.className.search( 'b-gallery-modal' ) !== -1 ) {
        e.target.classList.remove( 'animate' );
        setTimeout( function() {
          e.target.classList.remove( 'show-modal' );
        }, 500);
      }
    });
    
    //rooms swiper
    if (document.querySelector('.b-hotel-rooms')) {
      document.querySelector('.b-hotel-rooms').addEventListener('click', function(e) {
        if (e.target.classList.contains('b-room-card__collapsed-button')) {
          e.target.closest('.b-room-card').classList.add('b-room-card--open');
        } else if (e.target.classList.contains('b-room-card__image')) {
          e.target.closest('.b-room-card').classList.remove('b-room-card--open');
        }
      });
      
      window.hotelRoomsSwiper = new Swiper( '.b-hotel-rooms .swiper-container', {
        slidesPerView: 1.1,
        freeMode: true,
        spaceBetween: 10,
        navigation: {
          nextEl: '#roomsSwiperNext',
          prevEl: '#roomsSwiperPrev',
        },
        breakpoints: {
          1400: {
            spaceBetween: 30,
            slidesPerView: 3
          },
          1200: {
            spaceBetween: 30,
            slidesPerView: 3
          },
          992: {
            spaceBetween: 30,
            slidesPerView: 2.2
          },
          768: {
            spaceBetween: 30,
            slidesPerView: 1.8
          },
          576: {
            spaceBetween: 30,
            slidesPerView: 1.5
          }
        }
      });
    }
    
  });
})( jQuery );