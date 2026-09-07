import './bootstrap';

import AOS from 'aos';

import 'aos/dist/aos.css';

AOS.init({

```
duration: 800,

once: true,

offset: 100,
```

});

# /*

# BUAT AOS BISA DIAKSES DARI LAYOUT

*/

window.AOS = AOS;
