<?php include __DIR__ . '/index.php'; ?>



<div class="bg-blue-300 w-full h-full">
    <h1 class="text-center text-3xl font-bold py-4">This is the Todo APP page</h1>
    <div>
        <div class="p-4">
            <div class="flex justify-center w-full text-center">
                <input id="myInput" class="flex p-2 text-gray-500 w-2/3" type="text" id="A3-yes" name="mytextarea" value="" />
                <button class="flex bg-red-500 px-10" onclick="add()">
                    <h1 class="m-auto font-bold">Add</h1>
                </button>
            </div>
        </div>
        <ul id="myUL">
        </ul>
    </div>
</div>

<!-- <div id="toDoTemplate" style="display: none">
    <li class="flex justify-center w-full py-4">
        <span class="unchecked flex justfiy-end bg-white text-3xl text-black px-2 cursor-pointer">✓</span>
        <div class="info bg-white p-2 text-gray-500 w-2/3 bg-white text-left">BASE TEXT</div>
        <span class="close flex justfiy-end bg-white text-3xl text-black px-2 cursor-pointer" onclick="killMe(event)">×</span>
    </li>
</div> -->


<?php include __DIR__ . '/includes/footer.php'; ?>
<script>
    //********** this connects to the add button to add a new todo to the list **********\\
    // function killMe(event){
    //     console.log(event.target.closest('li'));
    //     // document.querySelector('#myUL').removeChild(event.target.closest('li'));
    // }


    //     var newToDo = document.querySelector('#toDoTemplate li').cloneNode(true);
    //     var textSpot = newToDo.querySelector('.info');
    //     textSpot.innerHTML = document.querySelector('#myInput').value;
    //     document.getElementById("myUL").appendChild(newToDo);

    //     return;
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
        var new_class = function(id) {
            return document.create(id);
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



        //these two with .className creates a class with this as the name in the li and in the div
        li.className = "flex justify-center w-full py-4";
        div.className = "info bg-white p-2 text-gray-500 w-2/3 bg-white text-left";
        //appendChild puts the parameter inside of the item
        div.appendChild(input_text);

        //basically if there is nothing typed it will alert you to put something in there before adding the child
        if (my_input === '') {
            alert("You Need To Add Something To The Input Text");
        } else {
            get_id("myUL").appendChild(li).appendChild(div);
        }
        //after you send the information to away this clears out the value inside the text area
        get_id("myInput").value = "";
        //declaring a new class and assigning it a text field for the checkmark
        new_checkmark_span.className = "unchecked flex justfiy-end bg-white text-3xl text-black px-2 cursor-pointer";
        new_checkmark_span.appendChild(txt_checkmark);
        //insertbefore basically tells the child where to be put in the list of children
        li.insertBefore(new_checkmark_span, li.firstChild);
        //new class and text
        new_x_span.className = "close flex justfiy-end bg-white text-3xl text-black px-2 cursor-pointer";
        new_x_span.appendChild(txt_x);
        li.appendChild(new_x_span);
        //This loops through each close class and says that everytime is is clicked it runs a function that clears the styling
        for (i = 0; i < close.length; i++) {
            close[i].onclick = function() {
                var div = this.parentElement;
                div.style.display = "none";
            }
        }
        //gets the unchecked class then runs it through a loop that decides if it is clicked or not and applies classes depending on the status
        var clicked = get_class("unchecked");
        for (i = 0; i < clicked.length; i++) {
            clicked[i].onclick = function(e) {
                //this array is not efficient at all but it's all I could think of at the time (I want to clean this up)
                const after_checked = [this.classList, this.nextSibling.classList, this.nextSibling.nextSibling.classList];
                after_checked.forEach(function(checked, i) {
                    if (i === 1) {
                        checked.toggle("line-through");
                    }
                    checked.toggle("bg-gray-400");
                    
                });
            }
        }
    }
    //********** End ADD area **********\\
</script>