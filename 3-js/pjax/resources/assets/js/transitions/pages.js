import home from 'pages/home';

export default function (namespace) {

    switch (namespace) {
        case 'home':
            home();
            break;
    }

}
