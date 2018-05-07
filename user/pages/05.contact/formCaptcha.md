---
title: Contact
form:
    name: my-nice-form
    fields:
        - name: message
          label: message
          classes: contactForm-message

          placeholder: Schrijf hier je bericht...
          autocomplete: off
          type: textarea
          validate:
            required: true
        - name: name
          label: Name
          classes: contactForm-name

          placeholder: Enter your name
          autocomplete: on
          type: text
          validate:
            required: true

        - name: email
          label: Email
          classes: contactForm-email

          placeholder: Enter your email address
          type: email
          validate:
            required: true
        <!-- - name: g-recaptcha-response
          label: Captcha
          type: captcha
          classes: contactForm-captcha
          recaptcha_site_key: 6LfpJUQUAAAAAN5f0Bskb-KsR1m_3g0jzB2WrTgV
          recaptcha_not_validated: 'Captcha not valid!'
          validate:
            required: true -->
    buttons:
        - type: submit
          value: Submit
          classes: contactForm-Submit
    fields:


    process:
        - captcha:
            recaptcha_secret: 6LfpJUQUAAAAAFNHT0_F3D7jLv6lxO0gEPZI24mq
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
        - message: Thank you for your feedback!
        - display: thankyou

number: 06 81 68 49 26
location: Amsterdam-Noord
mail: post(a)bramvandam.tv


---
### Neem contact op!

Ad minim veniam quis nostrud exerci tation ullamcorper. Suscipit lobortis nisl ut aliquip ex ea commodo consequat duis autem vel eum iriure. Non habent claritatem insitam est; usus legentis in iis? Demonstraverunt lectores legere me lius quod ii legunt saepius claritas est etiam processus dynamicus qui. Vulputate velit esse molestie consequat vel illum dolore eu. Seacula quarta decima, et quinta decima eodem modo typi. Lectorum mirum est notare quam littera gothica quam nunc putamus?

Duis dolore te feugait nulla facilisi nam liber tempor cum soluta. Nihil imperdiet doming id quod mazim placerat facer possim assum typi non habent. At vero eros et accumsan et, iusto odio dignissim qui. Typi qui nunc nobis videntur parum clari fiant sollemnes in. Duis autem vel eum iriure dolor in hendrerit? Seacula quarta decima, et quinta decima eodem modo. Claritatem Investigationes demonstraverunt lectores legere me lius quod ii legunt? Etiam processus dynamicus qui sequitur mutationem consuetudium lectorum mirum est notare quam littera gothica quam nunc.
