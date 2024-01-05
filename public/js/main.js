window.addEventListener("scroll", function() {
    const header = document.querySelector("header");

    header.classList.toggle("sticky", window.scrollY > 0);
});
const menuOpen = document.querySelector("#menu-open");
const menuClose = document.querySelector("#menu-close");
const nav = document.querySelector("nav");

menuOpen.addEventListener("click", () => {
    nav.style.right = "0";
});

menuClose.addEventListener("click", () => {
    nav.style.right = "-300px";
});

if ($(".success").length) {
    var modalTitle = $(".success").attr("data-message");
    swal.fire({
        icon: "success",
        title: modalTitle,
        timer: 2000,
        showConfirmButton: false
    });
};

if ($(".error").length) {
    var modalTitle = $(".error").attr("data-message");
    swal.fire({
        icon: "error",
        title: modalTitle,
        timer: 2000,
        showConfirmButton: false
    });
};

$(".delete").click(function(e) {
    var form = $(this).closest("form");
    var name = $(this).data("name");
    e.preventDefault();
    Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#d32b2b",
        cancelButtonColor: "gray",
        confirmButtonText: "Delete!"
    }).then((result) => {
        if (result.isConfirmed) {
            form.submit();
        }
    });
});

tinymce.init({
    selector: ".myTextarea",
    width: "100%",
    height: 300,
    plugins: [
        "advlist", "lists", "autoresize", "wordcount"
    ],
    toolbar: "bold italic | bullist numlist",
    menubar: false,
    content_css: "css/content.css"
});
