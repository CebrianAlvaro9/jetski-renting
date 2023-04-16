<x-mail::message>
# Bienvenido! Gracias por confiar en nosotros
## Te dejamos los datos de la reserva debajo

> Reserva para el dia y hora  **{{$date}}**
> para la moto **{{$brand}}**, **{{$model}}**
> por un precio de **{{$price}} €**
<x-mail::button :url="'client.index'">
Mas Info
</x-mail::button>

Thanks,<br>
Jetski Rental
</x-mail::message>
