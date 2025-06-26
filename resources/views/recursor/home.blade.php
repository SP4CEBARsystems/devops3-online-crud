<x-recursor-page
    title="Welcome to Discursor, here we discuss using text online."
    code=""
    buttonUrl="{{ url('/post-of-the-week') }}" button="post of the week"
    :posts="['post of last week', 'post I deleted', 'post on the obscure server we don’t talk about']"
    supportMessage="Maintained by one student, please don’t break the site!
If this were to happen somehow please"
/>
