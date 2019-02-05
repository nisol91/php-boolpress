$(document).ready(function() {

  function printComments(data) {
    for (var i = 0; i < data[0].length; i++) {
      var copy = $('.templates .com').clone();
      $('.comments').append(copy);
    }
    $('.comments .com').each(function(index) {
      $(this).find('h1').text(data[0][index]['name']);
      $(this).find('h2').text(data[0][index]['email']);
      $(this).find('h3').text(data[0][index]['body']);


    });

  };

  var my_query = window.location.search.substring(6);
  console.log(my_query);
  $.ajax({
    url: 'http://localhost/boolpress/php/comments.php',
    data: {
      slug: my_query,
    },
    method: 'GET',
    success: function (data) {
      var database_comments = JSON.parse(data);
      console.log(database_comments);
      printComments(database_comments);
    },
    error: function (data) {
      console.log('error');
    },
  });
});
