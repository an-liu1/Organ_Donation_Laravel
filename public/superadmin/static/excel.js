
jQuery(function() {
    var $ = jQuery,
    $list = $('#thelist'),
    $btn = $('#ctlBtn'),
    state = 'pending',
    uploader;

    uploader = WebUploader.create({
    	formData: {
    		_token: $('input[name=_token]').val(),
    	},
        auto: true,
        swf: '/superadmin/static/webuploader-0.1.5/Uploader.swf',
        server: '/superadmin/member/webuploader',
        pick: '#picker',
        // accept: {
        //     title: 'excel',
        //     extensions: 'xls,xlsx,csv',
        //     mimeTypes: ''
        // }
    });

    uploader.on( 'fileQueued', function( file ) {
        $list.append( '<div id="' + file.id + '" class="item">' +
            '<h4 class="info">' + file.name + '</h4>' +
            '<p class="state">waiting porgress...</p>' +
        '</div>' );
    });

    uploader.on( 'uploadProgress', function( file, percentage ) {
        var $li = $( '#'+file.id ),
            $percent = $li.find('.progress .progress-bar');

        if ( !$percent.length ) {
            $percent = $('<div class="progress progress-striped active">' +
            '<div class="progress-bar" role="progressbar" style="width: 0%">' +
            '</div>' +
            '</div>').appendTo( $li ).find('.progress-bar');
        }

        $li.find('p.state').text('Uploading');

        $percent.css( 'width', percentage * 100 + '%' );
    });

    uploader.on( 'uploadSuccess', function( file,response ) {
        $( '#'+file.id ).find('p.state').text('Uploaded! Please click sumit to finish the request!');
        $('input[name=excelpath]').val(response.path);
    });
    
    uploader.on( 'uploadError', function( file ) {
        $( '#'+file.id ).find('p.state').text('Worng');
    });
    
    uploader.on( 'uploadComplete', function( file ) {
        $( '#'+file.id ).find('.progress').fadeOut();
    });
});