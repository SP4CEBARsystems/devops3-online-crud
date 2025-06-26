<x-recursor-page
    title="Oh no! We couldn't find that page"
    code="404"
    buttonUrl="{{ url('/') }}" button="Go home"
    :posts="['post of last week', 'post I deleted', 'post on the obscure server we don’t talk about']"
    supportMessage="If the issue persists, please"
/>
