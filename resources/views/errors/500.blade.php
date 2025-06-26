<x-recursor-page
    title="Oh no! We have some technical difficulties. We hope to get this sorted out soon."
    code="500"
    buttonUrl="{{ url()->previous() }}" button="Go back"
    :posts="['post of last week', 'post I deleted', 'post on the obscure server we don’t talk about']"
    supportMessage="If the issue persists, please"
/>
