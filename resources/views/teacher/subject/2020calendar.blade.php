
<p id="demo"></p>

Looping ID<p id="id1" ></p>
TEST ID HOMEWORK<p id="test"></p>
TOTAL OBJECT<p id="count"></p>
<div id="output" class="out">

</div>
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

document.getElementById("test").innerHTML = jsonobject[0].id;


var test4 = jQuery.parseJSON(jsonarray);

$.each(test4,function (key,value) {

    document.getElementById("id1").innerHTML += value.id;


})

   ///dah siap skit, just nk update skit and everything looking good i guess.
   //later upload to github




window.onload=function(){
    var output = document.getElementById('output');
    var i=1;
    var val="";
    while(i<=9)
    {

        if(!document.getElementById('timedrpact'+i))
        {
            var ele = document.createElement("div");
            ele.setAttribute("id","timedrpact"+i);
            ele.setAttribute("class","inner");
            ele.innerHTML="test"+i;
            output.appendChild(ele);

        }
        i++;


    }
};
</script>


<div class="container-fluid">
    <div class="row border border-dark border-bottom-0 rounded m-2 mb-4 pb-4">
        <div class="col-md-6">
            <h3 class=" pt-3 pb-3">January</h3>
            <a>test</a>



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
            <h3 class=" pt-3 pb-3">March</h3>
            <a>test</a>
        </div>
    </div>

    <div class="row border border-dark border-bottom-0 rounded m-2 mb-4 pb-4">
        <div class="col-md-6">
            <h3 class=" pt-3 pb-3">April</h3>
            <a>test</a>
        </div>
    </div>

    <div class="row border border-dark border-bottom-0 rounded m-2 mb-4 pb-4">
        <div class="col-md-6">
            <h3 class=" pt-3 pb-3">May</h3>
            <a>test</a>
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
