// $(document).ready(function () {
// console.log('I am in a new file now');

//Your jquery code here
// console.log("We are using jQuery");
// jQuery Syntax looks like this
// $('selector').action()

//clicks on all the p elements.
// $('p').click(); //click on p
// $('p').click(function () {
//     console.log('you clicked on p', this);
//     //  $('#id').hide();
//     //  $('.class').hide();
// }); //do this when we click on p

// $('p').dblclick(function () {
//     console.log('you double clicked on p', this);
//     //  $('#id').hide();
//     //  $('.class').hide();
// });
// $('p').hover(function () {
//     console.log('you hoverd on: ', this);
//     //  $('#id').hide();
//     //  $('.class').hide();
// },
// function (){

//     console.log('Thanks for coming')
// });

// there are three main types of selectors in jQuery
// 1. element selector
// 2. id selector
// 3. class selector

// 1. Element selector -  This is an example of element selector which clicks on all p
// $('p').click();

// 2. Id selector - this is an example of id selector
// $('#second').click();

// 3. Class selector - this is an example of id selector
// $('.odd').click();

// other selectors
// $('*').click() // clicks on all the elements
// $('p.odd').click() // clicks on all the elements
// $('p:first').click() // clicks on all the elements

// Events in jQuery
// Mouse events = click, dblclick, mouseenter, mouseleave
// KeyboardEvent = keypress, keydown, MediaKeyStatusMap
// form events = submit, change, focus, blur
// document/window events = load, resize, scroll, unload

// demoing the on method
// $('p').on(
//     {
//         click: function () {
//             console.log('Thanks for clicking', this);
//         },
//         mouseleave: function () {
//             console.log("mouseleave");

//         }

//     })

// $('#wiki').hide(1000, function () {
//     console.log("hidden");
// })
// $('#wiki').show(1000, function () {
//     console.log("show");
// })
// $('#but').click(function () {
//     $('#wiki').fadeOut(5000);
// })

//     fadeIn()
// fadeOut()
// fadeToggle()
// fadeTo()

// Slide methods - speed and callback parameters are optional
// $('#wiki').slideUp(1000, function(){
//     console.log('done');
// })
// $('#wiki').slideDown(1000)
// $('#wiki').slideToggle(1000)

// Animate function in jQuery
// $('#wiki').animate({
//     opacity:0.3,
//     height: '150px',
//     width:'350px'

// }, "fast")
// $('#wiki').animate({ opacity: 0.3 }, 4000);
// $('#wiki').animate({ opacity: 0.9 }, 1000);
// $('#wiki').animate({ width: '350px' }, 12000);

// $('#ta').val('setting it to harry');
// $('#ta').html('setting it to harry');
// $('#ta').html('setting it to harry3');
// $('#inp').html('setting it to harry3');
// $('#inp').val('setting it to harry3');
// $('#inp').empty()
// $('#wiki').empty()
// $('#wiki').text('you are good')
// $('#wiki').remove()

//     $('#wiki').addClass('myclass')
// $('#wiki').addClass('myclass2')
// $('#wiki').removeClass('myclass2')
// $('#wiki').css('background-color', 'red')
// $('#wiki').css('background-color')

// AJAX Using jQuery
// $.get('https://code.jquery.com/jquery-3.3.1.js', function (data, status) { alert(data); })

// $.get('https://code.jquery.com/jquery-3.3.1.js', function (data, status) { alert(status); })

// $.post('https://code.jquery.com/jquery-3.3.1.js',
//     { name: 'harry', channel: 'code with harry' },
//     function (data, status) { alert(status) });

$(document).ready(function () {

    var table = $('#example').DataTable(
        {
            buttons: ['copy','excel','pdf','colvis','print']
        }
    );
    table.buttons().container()
    .appendTo('#example_wrapper .col-md-6:eq(0)');



    var table2 = $('#example2').DataTable(
        {
            buttons: ['copy','excel','pdf','colvis','print']
        }
    );
    table2.buttons().container()
    .appendTo('#example2_wrapper .col-md-6:eq(0)');


    var table3 = $('#example3').DataTable(
        {
            buttons: ['copy','excel','pdf','colvis','print']
        }
    );
    table3.buttons().container()
    .appendTo('#example3_wrapper .col-md-6:eq(0)');


    var table4 = $('#example4').DataTable(
        {
            buttons: ['copy','excel','pdf','colvis','print']
        }
    );
    table4.buttons().container()
    .appendTo('#example4_wrapper .col-md-6:eq(0)');

    var table5 = $('#example5').DataTable(
        {
            buttons: ['copy','excel','pdf','colvis','print']
        }
    );
    table5.buttons().container()
    .appendTo('#example5_wrapper .col-md-6:eq(0)');


    var table6 = $('#example6').DataTable(
        {
            buttons: ['copy','excel','pdf','colvis','print']
        }
    );
    table6.buttons().container()
    .appendTo('#example6_wrapper .col-md-6:eq(0)');

    var table10 = $('#example10').DataTable(
        {
            buttons: ['copy','excel','pdf','colvis','print']
        }
    );
    table10.buttons().container()
    .appendTo('#example10_wrapper .col-md-6:eq(0)');



    // $("#myTable").DataTable();
   
    $("#rajstudent").click(function () {
        $("#adminform").hide();
        $("#studentform").toggle(1000);
    });
    $("#rajadmin").click(function () {
        $("#studentform").hide();
        $("#adminform").toggle(1000);
    });
    $("#login").click(function () {
        $("#home").removeClass("active");
        $("#login").addClass("active");
        $("#rfail").hide();
        $(".rbody").toggle();
        $(".rbox").toggle(1000);

    });

    $("#home").click(function () {
        $("#login").removeClass("active");
        $("#home").addClass("active");
        $(".rbox").hide(1000);
        $(".rbody").hide();



    });

   
   
   
    
   

//      $('p').hover(function () {
//     console.log('you hoverd on: ', this);
//      $('#quote').hide(1000);
    
// },
// function (){

//     console.log('Thanks for coming')
// });


    


});

   


function rcheck() {
    var b = document.getElementsByName("bcheck");
    console.log(b.length);
    var k = 0;
    var i;
    for (i = 0; i < b.length; i++) {
        if (b[i].checked == true) {
            k = k + 1;
        }
    }
    if (k >= 2) {
        document.getElementById("rnotvalidc").innerHTML =
            "Please select only one.";
        return false;
    }
}

function rajcheck() {
    var a = document.getElementsByName("rcheckbox");
    var raj = 0;
    var count;
    for (count = 0; count < a.length; count++) {
        if (a[count].checked == true) {
            raj = raj + 1;
        }
    }
    if (raj >= 2) {
        document.getElementById("rnotvalid").innerHTML =
            "Please select only one.";
        return false;
    }

   
}
function openpart(portion) {
  var i;
  var x = document.getElementsByClassName("portion");
  for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
  }
  document.getElementById(portion).style.display = "block";
}



//scanner


// function Play2()
//     {

//         const beep = new Audio('audio/beep.mp3');
    
//         beep.play();

//     }
//   function Play()
//     {
  
        
//         const fail = new Audio('audio/fail.mp3');
//         fail.play();
//     }
    
    
//     function Play3()
//     {
  
       
//         const b3 = new Audio('audio/beep3.mp3');
//         b3.play();
//     }
    
    
    
       
// function rb(){
//     window.setTimeout(Play2(), 100);
// }

// function rb2(){
//     window.setTimeout(Play(), 100);
// }function rb3(){
//     window.setTimeout(Play3(), 100);
// }



//   function autoRefreshPage()  
//   {  
//       windowwindow.location = window.location.href;  
//   }  
//   setInterval('autoRefreshPage()', 20000);  

//     const scanner = new Html5QrcodeScanner('reader', { 
//         // Scanner will be initialized in DOM inside element with id of 'reader'
//         qrbox: {
            
//             width: 350,
//             height: 350,
//         },  // Sets dimensions of scanning box (set relative to reader element width)
//         fps: 60, // Frames per second to attempt a scan
//     });


//     scanner.render(success, error);
//     // Starts scanner

//     function success(result) {
//         rb()
//         window.setTimeout(function(){
//              window.location.href="https://khemrajfekar.in/rit/quick/" + result
//         }, 1600);
       
       
//         scanner.clear();
//         // Clears scanning instance

//         document.getElementById('reader').remove();
//         // Removes reader element from DOM since no longer needed
    
//     }

//     function error(err) {
//         console.error(err);
//         // Prints any errors to the console
//     }

//   let button = document.getElementById("rb55");
  
//          let color = button.style.color;
//          if (color == "red") { // if button color is red change it green otherwise change it to red.
//            rb2()
//          }
         
         
 
//   let button4 = document.getElementById("rb5");
//   let color2 = button4.style.color;
//          if (color2 == "green") { // if button color is red change it green otherwise change it to red.
//            rb3()
//          }
        
         




