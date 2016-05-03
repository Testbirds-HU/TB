      (function() {
          docInteractive('spill');
          var pageWrap = document.getElementById('pagewrap'),
              triggerLoading = [].slice.call(pageWrap.querySelectorAll('a.pageload-link')),
              loader = new SVGLoader(document.getElementById('loader'), {
                  speedIn: 450
              });

          function init() {
              triggerLoading.forEach(function(trigger) {
                  trigger.addEventListener('click', function(ev) {
                      ev.preventDefault();
		      document.location.href = link;
                      loader.show();
                      setTimeout(function() {
                          loader.hide();
                          linkTag = $(ev.target).is('a') ? $(ev.target) : $(ev.target).parents('a');
                          link = $(linkTag).attr('href');
                      }, 1000);
                  });
              });
          }
          init();
      })();
