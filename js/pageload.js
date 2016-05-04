
      $(function() {
          docInteractive(spill);
          var pageWrap = document.getElementById(pagewrap),
              triggerLoading = [].slice.call(pageWrap.querySelectorAll(a.pageload-link)),
              loader = new SVGLoader(document.getElementById(loader), {
                  speedIn: 450
              });

          function init() {
              triggerLoading.forEach(function(trigger) {
                  trigger.addEventListener(click, function(ev) {
                      ev.preventDefault();
                      loader.show();
                      setTimeout(function() {
			 loader.hide();
                         linkTag = $(ev.target).is(a) ? $(ev.target) : $(ev.target).parents(a);
                         link = $(linkTag).attr(href);
                         document.location.href = link;
                         //$("body").load(link);
                         //window.history.pushState(body, link, link);
                      }, 1000);
                  });
              });
          }
          init();

      })();

