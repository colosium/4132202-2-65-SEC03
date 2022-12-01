
    // alert("Hello js!");
    var num = 10;//global
    let name = "AOM";//scope
    const arr = [10, 20, "hi"];
    let obj = { name: "Dang", age: 20 };
    const objMix = {
        data: [{ name: "Dum", gpa: 3.51 },
        { name: "Dong", age: 18, gpa: 3.12 },
        ],
    };

    console.log(num);
    console.log(arr[2]);
    console.log(objMix.data[1].age);

    function add(a, b) {
        return a + b;
    }

    let total = add(3, 5);

    document.getElementById("div1").innerHTML = name;


    $(function () {
        // alert("Hello jQuery..");

        $("#btn1").click(function () {
            $("#div1").text("BRU");
        });

        $("#btn2").bind("click",()=>{
            $(".in1").val("BRU");
        });

        $("#btn3").click(()=>{
            $(".in1:even").toggleClass("red");
        })
        $("#div_form").load("./pages/form.html");
        
    });//jQuery Handle
