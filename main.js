// Your web app's Firebase configuration
// var firebaseConfig = {
//     apiKey: "******",
//     authDomain: "******",
//     projectId: "******",
//     storageBucket: "******",
//     messagingSenderId: "******",
//     appId: "******"
// };
// Initialize Firebase
// firebase.initializeApp(firebaseConfig);

// !!! Make sure to initialise above things in apiKey.js file
const messaging = firebase.messaging();

messaging.requestPermission()
.then(() => {
    console.log('GOT permission');
    return messaging.getToken();
})
.then((token) => {
    console.log('Your TOken iS');
    console.log(token);
})
.catch((err) => {
    console.log('GOT permission');
    console.log(err);
})

messaging.onMessage((payload) => {
    console.log('onMessage: ', payload);

    Swal.fire({
        title: payload.notification.title,
        text: payload.notification.body,
        icon: 'success',
    });

});


async function sendNotification() {

    const title = document.querySelector('#title').value;
    const body = document.querySelector('#body').value;

    const url = `${window.location.href}/send-notification.php`;
    const data = {
        to: receiverApiKey, // the receiver's apiKey; can get from messaging.getToken();
        data: {
            title: title,
            body: body,
        }
    }
    
    await $.ajax({
        type: 'POST',
        url,
        data,
        success: function(res) {
            console.log('Message sent success');

            document.querySelector('#title').value = null;
            document.querySelector('#body').value = null;
        },
        error: function(err) {
            console.log('Error sending message');
            Swal.fire({
                title: 'Error!',
                text: err.message,
                icon: 'error',
            });
            console.log(error.message);
        }

    })
}
