function htmllist(){

    // compile our template
    var template = Handlebars.compile($("#html-item-template").html());
    var sidenav = Handlebars.compile($("#sidenav-template").html());
    var pagenav = Handlebars.compile($("#pagenav-template").html());

    var data = {
      htmlitem: [
        {
            topic: 'Tables',
            description: 'Here\'s how to make tables in HTML.',
            html: '<table border="1">'+
                    '\n<tr>'+
                    '\n<td>row 1, cell 1</td>'+
                    '\n<td>row 1, cell 2</td>'+
                    '\n</tr>'+
                    '\n<tr>'+
                    '\n<td>row 2, cell 1</td>'+
                    '\n<td>row 2, cell 2</td>'+
                    '\n</tr>'+
                    '\n</table>',
            css: 'something' + "\nasdf", 
        },
        {
            topic: 'Tables COPY',
            description: 'Here\'s how to make tables in HTML.',
            html: '<table border="1">'+
                    '\n<tr>'+
                    '\n<td>row 1, cell 1</td>'+
                    '\n<td>row 1, cell 2</td>'+
                    '\n</tr>'+
                    '\n<tr>'+
                    '\n<td>row 2, cell 1</td>'+
                    '\n<td>row 2, cell 2</td>'+
                    '\n</tr>'+
                    '\n</table>',
            css: '', 
        },
        {
            topic: 'Tables COPY 2',
            description: 'Here\'s how to make tables in HTML.',
            html: '<table border="1">'+
                    '\n<tr>'+
                    '\n<td>row 1, cell 1</td>'+
                    '\n<td>row 1, cell 2</td>'+
                    '\n</tr>'+
                    '\n<tr>'+
                    '\n<td>row 2, cell 1</td>'+
                    '\n<td>row 2, cell 2</td>'+
                    '\n</tr>'+
                    '\n</table>',
            css: '', 
        }
        
      ]
    };

    $('#sidenavlist').html(sidenav(data));
    $('#pageitems').html(pagenav(data));
    $('#htmllist').html(template(data));
}