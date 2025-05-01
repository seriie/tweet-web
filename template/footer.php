<script>
    const image = document.querySelector('.profile-img');
    const dropdown = document.querySelector('.profile-dropdown');
    const dropdownContent = document.querySelectorAll('.profile-dropdown .content');

    image.addEventListener('click', function() {
        dropdown.classList.toggle('invisible');
    });

    dropdownContent.forEach(element => {
        element.addEventListener('click', function() {
            dropdown.classList.toggle('invisible');
        });
    });
</script>

</body>

</html>