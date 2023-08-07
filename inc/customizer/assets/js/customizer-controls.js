jQuery(document).ready(function ($) {
    "use strict";

    /**
     * TinyMCE Custom Control
     *
     * @author Zeddy Emmanuel <https://zeddyemy.github.io/>
     * @license http://www.gnu.org/licenses/gpl-2.0.html
     */

    $('.customize-control-tinymce-editor').each(function () {
        // Get the toolbar strings that were passed from the PHP Class
        var tinyMCEToolbar1String = _wpCustomizeSettings.controls[$(this).attr('id')].clarusmodtinymcetoolbar1;
        var tinyMCEToolbar2String = _wpCustomizeSettings.controls[$(this).attr('id')].clarusmodtinymcetoolbar2;
        var tinyMCEMediaButtons = _wpCustomizeSettings.controls[$(this).attr('id')].clarusmodmediabuttons;

        wp.editor.initialize($(this).attr('id'), {
            tinymce: {
                wpautop: true,
                toolbar1: tinyMCEToolbar1String,
                toolbar2: tinyMCEToolbar2String,
                content_css: '../wp-content/themes/clarusmod/inc/customizer/assets/css/custom-controls/tinymce.css'
            },
            quicktags: true,
            mediaButtons: tinyMCEMediaButtons
        });
    });
    $(document).on('tinymce-editor-init', function (event, editor) {
        editor.on('change', function (e) {
            tinyMCE.triggerSave();
            $('#' + editor.id).trigger('change');
        });
    });

    /**
     * Url Custom Control
     *
     * @author Zeddy Emmanuel <https://zeddyemy.github.io/>
     * @license http://www.gnu.org/licenses/gpl-2.0.html
     */
    // Function to check if the URL is valid
    function isValidUrl(url) {
        return url && /^(https?:\/\/)?([\da-z.-]+)\.([a-z.]{2,6})(\/([^\s\/?#]+)?)?(\?([^\s\/?#]*))?(#([^\s\/?#]*))?$/i.test(url);
    }

    // Listen for changes in the input field and apply the "invalid-url" class
    $('.customize-control-url input[type="url"]').on('input', function () {
        var url = $(this).val();
        var isValid = isValidUrl(url);
        $('.customize-control-url p.input-msg').toggleClass('invalid-url', !isValid);
        $(this).toggleClass('invalid-url', !isValid);
    });

    /**
     * Searchable Select Control
     * 
     * @author Zeddy Emmanuel <https://zeddyemy.github.io/>
     * @license http://www.gnu.org/licenses/gpl-2.0.html
     */
    
    $('.customize-ctrl-searchable-select').each(function(){
		$('.custom-searchable-select').select2({
			allowClear: true
		});
	});

	$(".custom-searchable-select").on("change", function() {
		var select2Val = $(this).val();
		$(this).parent().find('.customize-ctrl-searchable-select').val(select2Val).trigger('change');
	});
});