---
title: Contact
form:
    name: my-nice-form
    fields:
        - name: message
          label: Bericht
          classes: contactForm-message

          placeholder: Schrijf hier je bericht...
          autocomplete: off
          type: textarea
          validate:
            required: true
            message: Je hebt mij nog helemaal niets geschreven ):
        - name: name
          label: Naam
          classes: contactForm-name

          placeholder: Naam
          autocomplete: on
          type: text
          validate:
            required: true
            message: Mag ik weten hoe je heet?

        - name: email
          label: E-mail
          classes: contactForm-email

          placeholder: E-mailadres
          type: email
          validate:
            required: true
            message: Je bent je e-mailadres vergeten!
        - name: honeypot
          type: honeypot
    buttons:
        - type: submit
          value: Stuur
          classes: contactForm-Submit
    process:
        - email:
            from: "{{ config.plugins.email.from }}"
            to:
              - "{{ config.plugins.email.from }}"
              - "{{ form.value.email }}"
            subject: "[Feedback] {{ form.value.name|e }}"
            body: "{% include 'forms/data.html.twig' %}"
        - ip:
            label: User IP Adress
        - save:
            fileprefix: feedback-
            dateformat: Ymd-His-u
            extension: txt
            body: "{% include 'forms/data.txt.twig' %}"
        - message: Bedankt voor je berichtje! Je boodschap ligt nu in mijn digitale postvakje te wachten om door mij gelezen te worden. Natuurlijk laat ik je daarna zo snel mogelijk wat weten. Hieronder kan je je berichtje nog eens nalezen.
        - display: thankyou

number: 06 81 68 49 26
location: Amsterdam-Noord
mail: post(a)bramvandam.tv


---
### Neem contact op!

Lijkt het je leuk om samen te werken? Mij ook! Wil je gewoon iets vragen? Kom maar op. Gewoon zin om over de nieuwste films te praten? Yes please! hoe dan ook, neem via onderstaand formulier contact op of met behulp van het 06-nummer. Yes, you can.
