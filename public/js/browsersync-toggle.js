    'use strict';
    var SRCZ = 'http://127.0.0.1:9001/js/socket.js';
    function RMSYNC() {
      if(!EXISTS()) return;
      var src = $('script[src="'+SRCZ+'"]');
      src.remove();
      return 'removed';
    }
    function EXISTS() {
        return $('script[src="'+SRCZ+'"]').length;
    }
    function ADDSYNC() {
      if(EXISTS()) return;
      var src = document.createElement("script");
      src.src = SRCZ;
      src.async = true;
      document.body.appendChild(src);
      return 'added';
    }
    jQuery(function() {
      localStorage.needSync = (localStorage['needSync'] || '0');
      if($('#act').length) {
      }
      else{
        $(`
                <div id="act" class="text-center">
                        <label><a class="btn-xs btn-primary">OFF br/link &nbsp; <span>&times;</span> &nbsp;</a></label>
                        <label><a class="btn-xs btn-primary">ON br/link &nbsp; <span>&times;</span> &nbsp;</a></label>
                </div>
        `).appendTo('body footer');

        function RV () {
                localStorage.needSync == '1' ? ADDSYNC() : RMSYNC();
        }
        $('#act label:nth-child(1) a').click(function(){
                localStorage.needSync = '0'; RV();
        });
        $('#act label:nth-child(2) a').click(function(){
                localStorage.needSync = '1'; RV();
        });

//        $('#act').css('margin-top','80%');
//        $('#act').css('position','relative');
//      $('#act').css('position','fixed');
        $('#act label a').css('padding', '11px').css('margin', '12px').css('text-decoration', 'none');
        $('#act label a span').css('padding', '4px').css('border-radius', '12px');
        var H1 = function(){
          $('#act label:nth-child(1) a span').css('background', !EXISTS()?'#FA9':'')
                .css('box-shadow', '0 0 12px 12px rgba(255, 127, 127, 0.6)');
          $('#act label:nth-child(2) a span').css('background', '')
                .css('box-shadow', 'none');
        };


        $('#act label:nth-child(1) a').click(H1);


        var H2 = function(){
            $('#act label:nth-child(1) a span').css('background', '')
                .css('box-shadow', 'none');
            $('#act label:nth-child(2) a span').css('background', EXISTS()?'#AF9':'')
                .css('box-shadow', '0 0 12px 12px rgba(127, 255, 127, 0.6)');
        }

        $('#act label:nth-child(2) a').click(H2);

        localStorage.needSync == '1' ? ADDSYNC() : RMSYNC();
        localStorage.needSync == '1' ? H2() : H1();

      }
    });
