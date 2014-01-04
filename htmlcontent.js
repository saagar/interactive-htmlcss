// function peoplelist(){

//     // compile our template
//     var template = Handlebars.compile($("#people-template").html());

//     var data = {
//       people: [
//         { 
//             first_name: "Alan", 
//             last_name: 'Johnson',
//             phone: '<table border="1">\
// <tr>\
// <td>row 1, cell 1</td>\
// <td>row 1, cell 2</td>\
// </tr>\
// <tr>\
// <td>row 2, cell 1</td>\
// <td>row 2, cell 2</td>\
// </tr>\
// </table>', 
//             email: "alan@test.com", 
//             member_since: "Mar 25, 2011" 
//         },
//         { first_name: "Allison", last_name: "House", phone: "0987654321", email: "allison@test.com", member_since: "Jan 13, 2011" },
//         { first_name: "Nick", last_name: "Pettit", phone: "9836592272", email: "nick@test.com", member_since: "Apr 9, 2009" },
//         { first_name: "Jim", last_name: "Hoskins", phone: "7284927150", email: "jim@test.com", member_since: "May 21, 2010" },
//         { first_name: "Ryan", last_name: "Carson", phone: "8263729224", email: "ryan@test.com", member_since: "Nov 1, 2008" }
//       ]
//     };

//     $('#list').html(template(data));
// }

function htmllist(){

    // compile our template
    var template = Handlebars.compile($("#html-item-template").html());

    var data = {
      htmlitem: [
        {
            topic: 'Tables',
            description: 'Here\'s how to make tables in HTML.',
            html: '<table border="1">\
<tr>\
<td>row 1, cell 1</td>\
<td>row 1, cell 2</td>\
</tr>\
<tr>\
<td>row 2, cell 1</td>\
<td>row 2, cell 2</td>\
</tr>\
</table>',
            css: 'something' + "\nasdf", 
        },
        {
            topic: 'Tables COPY',
            description: 'Here\'s how to make tables in HTML.',
            html: '<table border="1">\
                    <tr>\
                    <td>row 1, cell 1</td>\
                    <td>row 1, cell 2</td>\
                    </tr>\
                    <tr>\
                    <td>row 2, cell 1</td>\
                    <td>row 2, cell 2</td>\
                    </tr>\
                    </table>',
            css: '', 
        }
        
      ]
    };

    $('#list').html(template(data));
}