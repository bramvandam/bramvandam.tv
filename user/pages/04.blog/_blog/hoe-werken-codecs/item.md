---
title: 'Hoe Werken Codecs?'
underscore: 'Alles wat je ooit wilde weten over o.a. ProRes, H.264 en long-GOP compressie'
date: 01/23/2016
author: 'Bram van Dam'
category: Tutorial
taxonomy:
    tag:
        - video
        - codecs
        - formats
        - transcode
        - encode
        - prores
        - h.264
        - h.265
        - cineform
        - test
---

Dit is hopelijk het eerste bericht in een reeks van velen. Eerdere pogingen tot frequent bloggen hebben mij echter geleerd dat ik helaas geen gewoonte dier ben. Oftewel, verwacht hier niet elke dag/week/maand een bericht te vinden.  Ik ga proberen zo vaak mogelijk hier iets met de wereld te delen, maar meer dan dat durf ik nu nog niet te beloven. We zullen zien waar het schip strandt. Here goes nothing.

===

Een van de eerste onderwerpen waar ik over wilde schrijven is video codecs formaten en compressie. Als beginnend editor merkte ik al gauw dat er een raar sfeertje hangt rond dit onderwerp. Niet vreemd als je een kijkje neemt bij de exportopties in je favoriete NLE. Bij Premiere Pro kan je al uit 24 formaten kiezen waarvan alleen al één formaat weer uit 55 presets bestaat. Dan hebben we nog niet gesproken over alle keuzes die daarna nog volgen. Veel mensen zullen kiezen voor wat bekend voorkomt of wat je zo snel aangeraden is op YouTube of fora. Je bent uit de brand: je export ziet er redelijk goed uit, de opdrachtgever heeft het filmpje, waarom je dan nog druk maken om al die gekke instellingen in je edit-programma?

Het probleem is dat er op dit moment geen *Golden Standard* voor het exporteren van video’s bestaat. Als je een filmpje aanlevert op YouTube vereist dit totaal andere instellingen dan als je film op televisie of op het zilveren scherm te zien moet zijn. Zelfs YouTube en Vimeo hebben allebei hun eigen voorkeuren voor videocompressie. Als je dus wil dat jouw film overal zo goed mogelijk voor de dag komt is er geen andere oplossing dan het moeras van codecs en videoformaten in te duiken. Na het lezen van dit artikel moet je een duidelijk beeld hebben van de beginselen van al deze instellingen en weet je beter wanneer en hoe jij je video moet comprimeren.

#### Wat zijn containers en codecs?

Als je begint te filmen met een camera is de stroom van informatie die dan binnenkomt niets meer en niets minder dan een reeks foto’s. Om dit overzichtelijk als een bestand op te slaan stopt je camera deze reeks in een soort doos. Die doos gevuld met beelden heet een *Container*. De naam van een container is vaak herkenbaar als het bestandstype. Voorbeelden van containers zijn '.mov’, ‘.mp4’, '.wmv’, en '.avi'. Vaak worden containers ook formaten genoemd. Aangezien de term format net niet helemaal klopt heb ik het in het vervolg alleen nog maar over containers.

Als je camera de ruwe informatie van je sensor direct in een container zou stoppen zou je opslag binnen no-time vol zijn. Daarom wordt er bijna altijd gebruik gemaakt van een bepaalde vorm van compressie. De manier waarop deze compressie plaats vindt heet een *Codec*. Het woord Codec staat voor * **Co**mpressor/**Dec**ompressor. *Het soort codec bepaalt op welke manier je video wordt gecomprimeerd. Het decompressor deel staat voor de manier waarop bijvoorbeeld je computer de beelden moet interpreteren als die ze weer probeert af te spelen. Voorbeelden van codecs zijn H.264, ProRes en DNxHD.

***
![containers1](https://cdn-images-1.medium.com/max/1280/1*k8n7Jx9UaLRAxum9HMp8nQ.png")

—— INVOEGEN PLAATJE CONTAINER EN CODEC

Om terug te gaan naar de vergelijking met de doos vol filmbeelden: De container is de doos zelf, de codec is de vorm die elk beeldje aanneemt als het in de doos belandt. Dit is de grootste reden voor verwarring, want een .mov container kan dus een H.264, ProRes of bijvoorbeeld DNxHD codec bevatten. Als iemand het dus heeft over de naam van een container zegt dat vaak nog niets over de *[codec](http://www.google.nl "Google")* en vise versa.

#### Welke containers en codecs moet ik gebruiken?

Nu je weet wat het verschil is tussen een container en een codec kunnen we bekijken welke jij dan moet kiezen. In het geval van containers zal je vaak zelf deze keuze helemaal niet hoeven maken. Op het moment dat je camera een videobestand maakt zal die vaak zelf kiezen voor de meest logische container voor een codec. Op dit moment zijn ‘.mp4’ en ‘.mov’ de meest voorkomende containers voor het aanleveren van online media, ‘.mxf’ wordt vaak gebruikt bij televisiestations en filmhuizen. Aangezien containers verder geen invloed hebben op de beeldkwaliteit wil ik in dit artikel hier verder geen tijd aan besteden. Weet in ieder geval dat dit de meest veilige opties zijn, mocht je ermee geconfronteerd worden.

 In het geval van codecs kan je drie verschillende soorten onderscheiden:

* Raw
* Lossy codecs
* Lossless codecs

Raw staat eigenlijk voor het ontbreken van een codec. Omdat de bestanden niet gecomprimeerd worden zijn de beelden nog ‘ruw’ en hebben ze ook geen codec. Deze videobestanden worden vaak niet in een container gestopt en opgeslagen als een individuele plaatjes. Het verschil tussen lossy en lossless codecs is de hoeveelheid compressie dat een codec toepast op het bestand.

Lossy codecs passen meer compressie toe dan lossless codecs. Hierdoor wordt het bestand logischerwijs kleiner, maar er is ook een grotere kans op het verlies van beeldkwaliteit. Een ander nadeel van lossy codecs is dat de decompressie meer vraagt van je computer. Meer compressie betekent een grotere berekening die je computer moet maken tijdens de decompressie, waardoor je CPU (of soms je GPU) harder moet werken. Voorbeelden van lossy codecs zijn H.264, H.265 en MPEG2. Op dit moment is H.264 is dé standaard, maar het nieuwere H.265 begint terrein te winnen.

Lossless codecs passen minder compressie toe waardoor de beeldkwaliteit vaak beter bewaard blijft en zijn minder intensief om af te spelen. De keerzijde is dat de bestanden meer ruimte in beslag nemen. Voorbeelden van Lossless codecs zijn ProRes, DNxHD en Cineform.

Beide soorten codecs zijn nuttig in verschillende situaties.

#### Capture Codecs

#### Edit Codecs

#### Delivery Codecs

#### Archival Codecs
