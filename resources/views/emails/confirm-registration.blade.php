<p>Hello, welcome to Gameshop, best place for buying video games. In order to activate you account, click <a href="{{ route('UserActivation', $user->code) }}" target="blank">here</a>.</p>

<p>If for some reason this link doesn't redirect you on activation page, than copy and paste following link: {{ route('UserActivation', $user->code) }}</p>