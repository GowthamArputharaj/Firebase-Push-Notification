importScripts('https://www.gstatic.com/firebasejs/8.3.0/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/8.3.0/firebase-messaging.js');

// Your web app's Firebase configuration
var firebaseConfig = {
    apiKey: "AIzaSyCG97YlHY5HpqrUVfRKRkidlRfkeBP1CXY",
    authDomain: "vue-fullstack-ff862.firebaseapp.com",
    projectId: "vue-fullstack-ff862",
    storageBucket: "vue-fullstack-ff862.appspot.com",
    messagingSenderId: "244319110813",
    appId: "1:244319110813:web:07ed60db0efbc49013b674"
};
// Initialize Firebase
firebase.initializeApp(firebaseConfig);

const messaging = firebase.messaging();

messaging.setBackgroundMessageHandler( payload => {
    const tilte = 'Hello Gowtham'
    const options = {
        body: payload.data.status,
    };
    return self.ServiceWorkerRegistration.showNotification(title, options);
});

