function formatNumber (num) {
    return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,")
}
function get_bp_image(image, size = 'full') {
    if(size == 'full') {
        return '/'.image;
    }else {
        var arrFile = image.split('/');
        if(arrFile.length == 1)
            arrFile = image.split('\\');
        var removed = arrFile.pop();
        var name = '/uploads/.tmb/' + removed;
        return name;
    }
}
