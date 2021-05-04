<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha256-KQnU+obPCRkedoV24abqt/JjWiYnVJxF0pWV/6ycDak=" crossorigin="anonymous"></script>
<script type="text/javascript" src="scripts/app.js?v=<?php echo(date("Y-m-d-H-i-s", filemtime('scripts/app.js'))) ?>"></script>
<script>
    // Gestion des emails
    Array.from(document.querySelectorAll('.email-link-container')).forEach(function (link_container) {
        var pre = link_container.getAttribute('data-pre');
        var aro = '@';
        var domain = link_container.getAttribute('data-domain');
        var classes = link_container.getAttribute('data-classes');
        var classes_text = '';
        if (classes) {
            classes_text = ` class="${classes}"`;
        }
        var text = pre + aro + domain;

        setTimeout(function () {
            link_container.innerHTML = `<a ${classes_text} href="mailto:${text}">${text}</a>`;
        }, 500);
    });
</script>