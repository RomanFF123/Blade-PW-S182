<footer class="text-center text-white" style="background-color: #f1f1f1;">

    <div class="container pt-4">
        <h1 class="display-5 text-center text-dark mt-1">BIBLIOTECA</h1>
    </div>
   
    <div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        &copy; <span id="currentDate"></span> Copyright:
        <a class="text-dark" href="https://www.facebook.com/roman.ferrusquia">Román Felipe Ferrusquia</a>
    </div>
</footer>
<script>
    const currentDate = new Date();
    const options = { year: 'numeric', month: 'long', day: 'numeric' };
    const formattedDate = currentDate.toLocaleDateString(undefined, options);
    document.getElementById("currentDate").textContent = formattedDate;
</script>
