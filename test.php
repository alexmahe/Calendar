<script type="text/javascript">
    function test() {
        console.log(document.getElementById("date"));

        if(document.getElementById("date").value === ""){
            console.log("vide");
        }
    }
</script>

<input type="date" id="date">
<button onclick="test()">submit</button>