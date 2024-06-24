(function() {
    emailjs.init("dearparthsingh@gmail.com");
})();

function sendEmail(event) {
    event.preventDefault();

    emailjs.sendForm('service_bsksqnl', 'template_0u6jzok', '#email-form')
        .then(function(response) {
            console.log('SUCCESS!', response.status, response.text);
            alert('Email sent successfully!');
        }, function(error) {
            console.log('FAILED...', error);
            alert('Failed to send email.');
        });
}
