<x-mail::message>
# Bienvenido! Su reserva ha sido actualizada
## Te dejamos los **Nuevos datos** de la reserva debajo:

> Reserva para el dia y hora  **{{$date}}**
> para la moto **{{$brand}}**, **{{$model}}**
> por un precio de **{{$price}} €**

<x-mail::button :url="'client.index'">
Info
</x-mail::button>

Thanks,<br>
Rental jetski
</x-mail::message>
