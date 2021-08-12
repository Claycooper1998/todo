<?php include __DIR__ . '/index.php'; ?>



<div class="bg-blue-300 w-full h-full">
    <h1 class="text-center text-3xl font-bold py-4">This is the Todo APP page</h1>
    <div>
        <div class="p-4">
            <div class="flex justify-center w-full text-center">
                <input class="flex p-2 text-gray-500 w-2/3" type="text" id="A3-yes" name="mytextarea" value="Title..." />
                <button onclick="addNewTodo()" class="flex bg-red-500 px-10">
                    <h1 class="m-auto font-bold">Add</h1>
                </button>
            </div>
        </div>
        <ul class="py-4">
            <li class="delete flex justify-center w-full py-2">
                <span class="flex bg-white p-2 text-gray-500 w-2/3 bg-white text-left">Hello</span>
                <div class="flex bg-white hover:bg-red-500 text-3xl text-black hover:text-white w-10 
                cursor-pointer">
                    <div class="mx-auto">×</div>
                </div>
            </li>
            <li class="delete flex justify-center w-full py-2">

            </li>
        </ul>
    </div>
</div>


<!-- <label class="" for="myCheckbox" class="select-none"></label> -->


<?php include __DIR__ . '/includes/footer.php'; ?>
<script>

    var LiTag = document.getElementsByTagName("LI");
    var i;
    for (i = 0; i < LiTag.length; i++) {
        var makeSpanTag = document.createElement("SPAN");
        var makeText = document.createElement("\u00D7");
        makeSpanTag.className = "delete";
        makeSpanTag.appendChild(makeText);
        LiTag[i].appendChild(makeSpanTag);
    }
    //for some reason when I had delete as an Id it didn't work but making it into a class worked
    // var close = document.getElementsByID("delete");
    //classes are better because you can have multiple selectors
    var close = document.getElementsByClassName("delete");
    var i;
    for (i = 0; i < close.length; i++) {
        close[i].onclick = function() {
            var li = this.parentElement;
            li.style.display = "none";
        }
    }

    // var closeLi = document.getElementsByTagName("LI"); //This gets the HTML tag
    // var i;
    //     for (i = 0; i < closeLi.length; i++) {
    //         var div = document.createElement("DIV");
    //         var txt = document.createTextNode("\u00D7");
    //         div.className = "close";
    //         div.appendChild(txt);
    //         closeLi[i].appendChild(div);
    //     }
</script>