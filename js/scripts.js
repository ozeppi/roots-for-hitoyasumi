$(document).ready(function() {

//	$("#cycle").cycle({
//		fx: "fade"
//	});

//	$("figure.gallery-item a").attr("rel","gallery");
//	$("figure.gallery-item a[rel='gallery']").fancybox();

    function getTwitterWidgetInstance (target_element_id) {
        return new TWTR.Widget({
            id: target_element_id,
            version: 2,
            type: 'profile',
            rpp: 4,
            interval: 6000,
            width: 270,
            height: 300,
            theme: {
                shell: {
                    background: '#f0a8a8',
                    color: '#ffffff'
                },
                tweets: {
                    background: '#fff7cc',
                    color: '#000000',
                    links: '#7084c2'
                }
            },
            features: {
                scrollbar: false,
                loop: false,
                live: true,
                hashtags: true,
                timestamp: true,
                avatars: false,
                behavior: 'all'
            }
        });
    }

    function cancelRadius (targets) {
        $.each(targets, function (index, target){
            $(target).css('-webkit-border-radius', '0px').css('border-radius', '0px').css('-moz-border-radius', '0px');
        });
    }
    getTwitterWidgetInstance('twitter').render().setUser('nico_akua').start();
    setTimeout(function (){
        cancelRadius([
            $('#twitter .twtr-doc:first-child'),
            $('#twitter .twtr-timeline:first-child'),
            $('#twitter .twtr-popular:first-child')
        ]);
    }, 50);
});
