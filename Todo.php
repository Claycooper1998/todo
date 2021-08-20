<?php include __DIR__ . '/index.php'; ?>



<div class="bg-blue-300 w-full h-full">
    <h1 class="text-center text-3xl font-bold py-4">This is the Todo APP page</h1>
    <div>
        <div class="p-4">
            <div class="flex justify-center w-full text-center">
                <input id="myInput" class="flex p-2 text-gray-500 w-2/3" type="text" id="A3-yes" name="mytextarea" value="Title..." />
                <button class="flex bg-red-500 px-10" onclick="add()">
                    <h1 class="m-auto font-bold">Add</h1>
                </button>
            </div>
        </div>
        <ul id="myUL">
        </ul>
    </div>
</div>


<?php include __DIR__ . '/includes/footer.php'; ?>
<script>
    //********** this connects to the add button to add a new todo to the list **********\\
    function add() {
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
        var close = get_class("close");
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




        li.className = "flex justify-center w-full py-4";
        div.className = "info bg-white p-2 text-gray-500 w-2/3 bg-white text-left";
        div.appendChild(input_text);

        if (my_input === '') {
            alert("You Need To Add Something To The Input Text");
        } else {
            get_id("myUL").appendChild(li).appendChild(div);
        }
        get_id("myInput").value = "";

        new_checkmark_span.className = "checked flex justfiy-end bg-white hover:bg-red-500 text-3xl text-black hover:text-white px-2 cursor-pointer";
        new_checkmark_span.appendChild(txt_checkmark);
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
        var clicked = document.getElementsByClassName("checked");
        for (i = 0; i < clicked.length; i++) {
            clicked[i].onclick = function() {
                console.log("Testing");
            }
        }
    }
    //********** End ADD area **********\\
</script>