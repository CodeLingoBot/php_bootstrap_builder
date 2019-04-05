const bootstrap_builder = {
    render_image: function(input, image_id){
        if (!input.files || !input.files[0]) return;
        var reader = new FileReader();

        reader.onload = function (e) {
            document.getElementById(image_id).src = e.target.result;
        };

        reader.readAsDataURL(input.files[0]);
    }
}