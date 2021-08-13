<?php include __DIR__ . '/index.php'; ?>



<div class="bg-blue-300 w-full h-full">
    <h1 class="text-center text-3xl font-bold py-4">This is the Todo APP page</h1>
    <div>
        <div class="p-4">
            <div class="flex justify-center w-full text-center">
                <input class="flex p-2 text-gray-500 w-2/3" type="text" id="A3-yes" name="mytextarea" value="Title..." />
                <button class="flex bg-red-500 px-10">
                    <h1 class="m-auto font-bold">Add</h1>
                </button>
            </div>
        </div>
        <ul>
            <li class="flex justify-center w-full py-4">
                <div class="checked bg-white p-2 text-gray-500 w-2/3 bg-white text-left">Hello</div>
            </li>
        </ul>
    </div>
</div>


<?php include __DIR__ . '/includes/footer.php'; ?>
<script>
    // \u2713 for checkmark \u00D7

    var LiTag = document.getElementsByTagName("LI");
    var i;
    for (i = 0; i < LiTag.length; i++) {
        //creates Span tag with X in it
        var xSpan = document.createElement("SPAN");
        var makeX = document.createTextNode("\u00D7");
        //creates Span tag with checkmark in it
        var checkSpan = document.createElement("SPAN");
        var makeCheckmark = document.createTextNode("\u2713");
        //since we are using tailwind, it is a good idea to add the whole class in here so it all loads
        //These are both making the clases with the names of them with the tailwind CSS included
        checkSpan.className = "op flex justfiy-end bg-white hover:bg-red-500 text-3xl text-black hover:text-white px-2 cursor-pointer";
        xSpan.className = "close flex justfiy-end bg-white hover:bg-red-500 text-3xl text-black hover:text-white px-2 cursor-pointer";
        //this basically inserts the checkmark before the div so that it can be at the front of the whole statement
        checkSpan.appendChild(makeCheckmark);
        LiTag[i].insertBefore(checkSpan, LiTag[i].firstChild);
        //Inserts the X at the end of the statement
        xSpan.appendChild(makeX);
        LiTag[i].appendChild(xSpan)

    }
    //This section takes the "close" class that we made up above and added to the span tag in the X and closes the whole statement
    //just sets all the information to no styling so it doesn't show up
    var close = document.getElementsByClassName("close");
    var i;
    for (i = 0; i < close.length; i++) {
        close[i].onclick = function() {
            var div = this.parentElement;
            div.style.display = "none";
        }
    }

    var list = document.querySelector("LI");
    list.addEventListener("click", function(ev) {
        var element = ev.target;
        if (element.tagName === 'LI') {
            element.classList.toggle('checked');
            console.log("testing");
        }
    }, false);
</script>