<x-mail::message>
# Hola {{ $name }},

Solo queríamos recordarte que tienes una reserva para mañana hora y fecha {{ $reservation->date_in }} 
para alquilar una moto de agua.

 ¡Esperamos verte mañana!
    
 Saludos cordiales,
 El equipo de alquiler de motos de agua
    

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
