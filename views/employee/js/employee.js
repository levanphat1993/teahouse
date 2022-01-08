class Employee {
    validate(){
        $("#employee").validate({
            rules: {
                name: "required",
                phone: "required",
                email: {
                    required: true,
                    email: true
                },
            },
            messages: {
                name: "Please enter your name",
                phone: "Please enter your phone",
                email: "Please enter a valid email address"
            },
        });
    };

}

let obj = new Employee();
$().ready(function() {
    obj.validate();
});
