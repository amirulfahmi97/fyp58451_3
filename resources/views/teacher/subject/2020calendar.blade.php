
<p id="demo"></p>

Looping ID<p id="id1" ></p>
TEST ID HOMEWORK<p id="test"></p>
TOTAL OBJECT<p id="count"></p>
<div id="div1"></div>
<div id="div3"></div>
<div id="output" class="out">

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">


var users = {!! json_encode($hwork) !!};
//above is javascript object that receive from the server and below we con
//below converted to json object
var jsonarray = JSON.stringify(users);
//below converted back to javscript object
var jsonobject = jQuery.parseJSON(jsonarray);
var count = Object.keys(jsonobject).length;
//console.log(test);
document.getElementById("demo").innerHTML = jsonarray;
document.getElementById("count").innerHTML = count;

document.getElementById("test").innerHTML = jsonobject[1].id;


var div1 = document.getElementById("div1");
var div3 = document.getElementById("div3");

window.onload=function(){
function refactorHomework(homeworkString){
    var homeworkDiv = document.getElementById("div3");
    homeworkDiv.innerHTML="Homework List as Below";


    homeworkString.forEach(function (test) {
        var homeworkdiv = document.createElement("div"),
            iddiv= document.createElement("div"),
            contentdiv = document.createElement("div"),
            testjak = document.createElement("div"),
            br = document.createElement("br");


        var homeworkDateCreate = document.createElement("div");
        var monthCreated = document.createElement("div");

       // homeworkdiv.innerHTML="Homework list";
        testjak.innerHTML = jsonobject[0].subjectid;
        iddiv.innerHTML = "Id is = " + test.id;
        contentdiv.innerHTML = "Description is " +  test.homeworkDesc;
        homeworkDateCreate.innerHTML = "Data Created at " + test.created_at;

        var test2 = test.created_at;

        var t = test2.split(/[- :]/);
        var d = new Date(Date.UTC(t[0], t[1]-1, t[2], t[3], t[4], t[5]));
        var a = d.getMonth();

        iddiv.setAttribute("class","testname");
        homeworkdiv.className="bigdiv";
        // contentdiv.innerHTML="Description";
        div3.style.color="blue";

        homeworkdiv.appendChild(br);
        homeworkdiv.appendChild(iddiv);
        homeworkdiv.appendChild(contentdiv);
        homeworkdiv.appendChild(homeworkDateCreate);
        homeworkdiv.appendChild(monthCreated);




        switch (a) {
            case 0:
                monthCreated.innerHTML="January";
                monthCreated.style.color="red";
                var jan = document.getElementById("jan");
                jan.appendChild(homeworkdiv);
                break;
            case 1:
                //
                break;
            case 2:
                monthCreated.innerHTML = "month created is March";
                var march = document.getElementById("march");
                march.appendChild(homeworkdiv);
                break;
            case 3:
                monthCreated.innerHTML = "month created is April";
                var april = document.getElementById("april");
                april.appendChild(homeworkdiv);
                break;
            case 4:

                monthCreated.innerHTML = "month created is on May";
                var may = document.getElementById("may");
                may.appendChild(homeworkdiv);
                break;
            case 5:
                //
                break;
            case 6:``
                //
                break;
            case 7:
                //
                break;
            case 8:
                //
                break;
            case 9:
                //
                break;
            case 10:
                //
                break;
            case 11:
                //
                break;
            default:

                div3.appendChild(homeworkdiv);
                monthCreated.innerHTML="besides that";
        }




     //   homeworkdiv.appendChild(br);
     //   homeworkdiv.appendChild(iddiv);
     //   homeworkdiv.appendChild(contentdiv);
     //   homeworkdiv.appendChild(homeworkDateCreate);
     //   homeworkdiv.appendChild(monthCreated);
     //
     //   div3.appendChild(homeworkdiv);

    })

}
  function getHomeworkstring(callback){

      var homeworkArray = jsonobject;
      callback(homeworkArray);

  }
  getHomeworkstring(function (homeworkArray) {
      refactorHomework(homeworkArray);
  })



};


</script>


<div class="container-fluid">
    <div class="row border border-dark border-bottom-0 rounded m-2 mb-4 pb-4">
        <div class="col-md-6">
            <div id="jan">

            <h3 class=" pt-3 pb-3">January</h3>
            <a>test</a>
            </div>



        </div>
    </div>


    <div class="row  border border-dark border-bottom-0 rounded m-2 mb-4 pb-4">
        <div class="col-md-6">
            <h3 class=" pt-3 pb-3">February</h3>

            <a>test</a>
        </div>
    </div>

    <div class="row border border-dark border-bottom-0 rounded m-2 mb-4 pb-4">
        <div class="col-md-6">
            <div id="march">
            <h3 class=" pt-3 pb-3">March</h3>
            <a>test</a>
            </div>
        </div>
    </div>

    <div class="row border border-dark border-bottom-0 rounded m-2 mb-4 pb-4">
        <div class="col-md-6">
            <div id="april">

            <h3 class=" pt-3 pb-3">April</h3>
            <a>test</a>
            </div>
        </div>
    </div>

    <div class="row border border-dark border-bottom-0 rounded m-2 mb-4 pb-4">
        <div class="col-md-6">
            <div id="may">
            <h3 class=" pt-3 pb-3">May</h3>
            <a>test</a>
            </div>
        </div>
    </div>

    <div class="row  border border-dark border-bottom-0 rounded m-2 mb-4 pb-4">
        <div class="col-md-6">
            <h3 class=" pt-3 pb-3">June</h3>
            <a>test</a>
        </div>
    </div>

    <div class="row  border border-dark border-bottom-0 rounded m-2 mb-4 pb-4">
        <div class="col-md-6">
            <h3 class=" pt-3 pb-3">July</h3>
            <a>test</a>
        </div>
    </div>

    <div class="row  border border-dark border-bottom-0 rounded m-2 mb-4 pb-4">
        <div class="col-md-6">
            <h3 class=" pt-3 pb-3">August</h3>
            <a>test</a>
        </div>
    </div>

</div>
