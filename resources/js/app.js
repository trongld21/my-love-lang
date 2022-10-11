require("./bootstrap");
import "flowbite";
import { createApp, h } from "vue";
import { createInertiaApp } from "@inertiajs/inertia-vue3";
import { InertiaProgress } from "@inertiajs/progress";
import AppLayout from "@/Layouts/App";

InertiaProgress.init();
createInertiaApp({
    resolve: (name) => {
        let page = require(`./Pages/${name}`).default;
        page.layout = page.layout || AppLayout;

        return page;
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .mixin({ methods: { route } })
            .mount(el);
    },
});
