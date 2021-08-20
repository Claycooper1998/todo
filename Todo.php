<?php include __DIR__ . '/index.php'; ?>



<div class="bg-blue-300 w-full h-full">
    <h1 class="text-center text-3xl font-bold py-4">This is the Todo APP page</h1>
    <div>
        <div class="p-4">
            <div class="flex justify-center w-full text-center">
                <input id="myInput" class="flex p-2 text-gray-500 w-2/3" type="text" id="A3-yes" name="mytextarea" value="Title..." />
                <button class="add flex bg-red-500 px-10">
                    <h1 class="m-auto font-bold">Add</h1>
                </button>
            </div>
        </div>
        <ul id="myUL">
            <li class="flex justify-center w-full py-4">
                <div class="checked bg-white p-2 text-gray-500 w-2/3 bg-white text-left">Hello</div>
            </li>
            <li class="flex justify-center w-full py-4">
                <div class="checked bg-white p-2 text-gray-500 w-2/3 bg-white text-left">hi</div>
            </li>
        </ul>
    </div>
</div>


<?php include __DIR__ . '/includes/footer.php'; ?>
<script>
    var new_element = function(id) {
        return document.createElement(id);
    };
    var get_id = function(id) {
        return document.getElementById(id);
    };
    var new_text = function(id) {
        return document.createTextNode(id);
    };
    var get_class = function(id) {
        return document.getElementsByClassName(id);
    };
    var get_name_tag = function(id) {
        return document.getElementsByTagName(id);
    };

    var add = get_class("add");
    var li = new_element("li");
    var div = new_element("div");
    var my_input = get_id("myInput").value;
    var input_text = new_text(my_input);
    var new_x_span = new_element("span");
    var new_checkmark_span = new_element("span");
    var txt_x = new_text("\u00D7");
    var txt_checkmark = new_text("\u2713");
    var LiTag = get_name_tag("li")
    var i = '';

    //This is adding the X and checkmark in the code as well as styling them
    for (i = 0; i < LiTag.length; i++) {
        var xSpan = document.createElement("SPAN");
        var makeX = document.createTextNode("\u00D7");
        var checkSpan = document.createElement("SPAN");
        var makeCheckmark = document.createTextNode("\u2713");
        checkSpan.className = "checked flex justfiy-end bg-white hover:bg-red-500 text-3xl text-black hover:text-white px-2 cursor-pointer";
        xSpan.className = "close flex justfiy-end bg-white hover:bg-red-500 text-3xl text-black hover:text-white px-2 cursor-pointer";
        checkSpan.appendChild(makeCheckmark);
        LiTag[i].insertBefore(checkSpan, LiTag[i].firstChild);
        xSpan.appendChild(makeX);
        LiTag[i].appendChild(xSpan)
    }
    var close = document.getElementsByClassName("close");
    var i;
    for (i = 0; i < close.length; i++) {
        close[i].onclick = function() {
            var div = this.parentElement;
            div.style.display = "none";
        }
    }

    //I need to get rid of the function because it is messing up the rest of the code becuase it only runs when the onclick add button is hit
    // ++++ **** ++++


    //********** this connects to the add button to add a new todo to the list **********\\

    for (i = 0; i < add.length; i++) {
        add[i].onclick = function() {
            li.className = "flex justify-center w-full py-4";
            div.className = "bg-white p-2 text-gray-500 w-2/3 bg-white text-left";
            div.appendChild(input_text);

            if (my_input === '') {
                alert("You Need To Add Something To The Input Text");
            } else {
                get_id("myUL").appendChild(li).appendChild(div);
            }
            get_id("myInput").value = "";

            new_checkmark_span.className = "checked flex justfiy-end bg-white hover:bg-red-500 text-3xl text-black hover:text-white px-2 cursor-pointer";
            new_checkmark_span.appendChild(makeCheckmark);
            li.insertBefore(new_checkmark_span, li.firstChild);
            new_x_span.className = "close flex justfiy-end bg-white hover:bg-red-500 text-3xl text-black hover:text-white px-2 cursor-pointer";
            new_x_span.appendChild(txt_x);
            li.appendChild(new_x_span);
            for (i = 0; i < close.length; i++) {
                close[i].onclick = function() {
                    var div = this.parentElement;
                    div.style.display = "none";
                }
            }
            //++++ **** ++++
            //This goes and gets the class checked that is already made and sends an alert when it is hit
            var clicked = document.getElementsByClassName("checked");
            for (i = 0; i < clicked.length; i++) {
                clicked[i].onclick = function() {
                    alert("you hit the checkmark");
                }
            }
        }
    }
    //********** End ADD area **********\\
</script>