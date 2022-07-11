@component('mail::message')
    # GGD Zeeland Agenda Uitnodiging

    Klik op de knop om een afspraak in te plannen.

    @component('mail::button', ['url' => 'http://127.0.0.6/calender/create'])
        GGD Zeeland
    @endcomponent
@endcomponent
