---
title: How do codecs work?
underscore:  Everything about ProRes, DNxHD, wrappers and compression you’d care about.
date: 04/24/2018
author: Bram van Dam
category: Article
taxonomy:
    tag: [video, codecs, formats, transcode, encode, prores, h.264, h.265, cineform, test]
---
At the end of your project, it’s hard not to have a nostalgic day dream about how you’ve got here:  You’ve watched an endless stream of dailies and went through the time to sort them, rate them, and even ditched a few bad ones. Then you’ve took the best ones you could find and combined them all to the best edit you could think of. Some stabilizer here, a bit of color correction madness there. And then… You press export. You wake up out of your day dream and only a few cups of coffee later the magical (but also a bit sad) moment is there: YourMasterpiece.mp4 is sitting there on the desktop. All your work is compressed - literally! - into a small clump of kilobytes. These young’uns, they grow up so fast. Not much later you are pondering the meaning of life - aren’t we all a bunch of data - while opening up WeTransfer to send your little kid on new adventures. When you watch the bar reach 100% you start to wonder: how do babies even work? Well, video babies I mean. Let’s get to it!

In the following paragraphs I will delve into the world of codecs, wrappers, formats and compression types to make the answer on that question kind of digestible. I will start with a very broad approach on the theories behind digital video and audio, narrowing down on the subject by explaining how these are stored in so called wrappers, making use of different codecs. Then I will expand a bit on the differences between these and how knowing this can actually help you out as an (assistant) editor. My goal is to make this as easily understandable as possible and I cannot prevent that I might tell you some things that you already know. Stick with me there and hopefully you’ll end up with a bigger understanding of how it all works together.
#### What is digital video?
The best way to grasp how digital video works is to compare it to it’s analog counterpart: film. The still frames printed on the celluloid are rapidly shown at 24 frames per second to the viewer while the audio printed on the side of the film is played back in sync with the video.  Your digital file is not working any different. It contains a stream of video, a sequence of still images, and a stream of audio that are played back at the same time. The differences start to show up in the way these streams are saved. Obviously your computer drives don’t work so well with celluloid, so it has to use something it’s more familiar with: bits and bytes.
In it’s most simple form every frame in your video is described pixel for pixel in a map creating a so called *bitmap.* This, in it’s own way, happens as well to your audio stream. These descriptions of video and sound are being decoded by your computer and then displayed via your screen and speakers.
#### What is a codec?
That wasn’t so hard. But if something sounds to easy, it probably isn’t. If it literally worked this way,  we would end up which humongous file sizes.  Why? Let’s look at an example:
Let’s take a video without any sound that has a color depth of 10 bits per color channel (Red, Green and Blue, or *rgb*). It will run at 24 frames per second in HD.  I know that is a bit much all at once but basically we are doing the following:
*We take a single frame of video that is 1920 pixels wide and 1080 pixels high. We describe every pixel in 30 bits, for every color channel 10: red, green and blue. We then display every frame for 1/24th of a second so we have to do that 24 times to end up with a second of video.*
If we tried to calculate the total file size of this file, the math would look something like this:
```
(3x10)x(1080x1920)x24 = 1.492.992.000 bits
```
That are a lot of bits, let’s make that number a bit more readable. Knowing that 8 bits are one byte (know your computer terminology boys and girls) we can divide the amount of bits by 8000 and end up with the size of one second of video in kilobytes:

<!-- A computer works in binary code, you know, ones and zeroes. Every one or zero it uses is called a bit. A group of 8 bits is called a byte. We then call a group of 1000 bytes a kilobyte, a group of 1000 kilobytes a megabyte, a group of 1000 megabytes a gigabyte etc. These are shortened and used all over your computer.   
Note that there is a significant difference between the way we shorten a megabyte (MB) and a megabit (Mb). A capital ‘B’ is used when we are talking about bytes, a lowercase ‘b’ when we are talking bits.  The confusion between these two is often exploited by Internet Providers to trick you into thinking you’re getting a faster internet connection (100Mbps = 12.5MBps). If you ever want to convert a megabit to a megabyte you can always divide it by 8 (8 bits is 1 byte, remember!).   -->

```
1.492.992.000/8000 = 186.624 kilobytes, or 186.6MB.
```
That doesn’t sound right at all, does it? A normal video you’ve recorded with your iPhone is that size in total, not per second! How can that video be so much smaller?  
To account for these big file sizes a camera or computer uses a lot of different compression techniques to make the files smaller. This happens directly when the file is saved. When you open the file, the computer needs to understand what it has to display so it will then decompress the file. This is basically what a *codec* is, it even literally means **Co**mpressor/**Dec**ompressor. A Codec defines in which ways your media is compressed and decompressed to end up with the, in some instances, almost 100 times smaller files that we are working with today. Video codecs you might have heard of are H.264, ProRes, DNxHD, CineForm and MPEG2. Some Audio codecs are MP3, WAV, AIFF and AAC.  
_Compressing your video files comes at a cost. You can’t make video 1/100th of it’s size for free right. Didn’t think so. To make your files smaller your computer always has to A - make the file more processor intensive and/or B - throw away some of your image information: degrading the quality of the file in the process. We will look into some of these techniques later on in this article._  
In summary, a media file is a bunch of video and audio streams, encoded into bits that are then being individually compressed and then stored in a single file. This is later decompressed and decoded to be displayed again. The way this is done is called a codec. Simple! But why is my file called YourMasterpiece **.mp4** and not **.ProRes**?

#### What is a wrapper or container?
There is a lot of different information stored aside of your video and audio. How many frames should be displayed per second? How many audio samples? For how long does the video run? Is there a track with subtitles available? All this information is called *metadata*. Together with the streams of video and audio this information is stored in a neat package called a *container* or *wrapper*. The wrapper dictates the extension of your media file because your computer need to know this immediately when opening the file so it can handle your file correctly. When you open up an .mp4 it might open up Quicktime, when you double click an .mxf it opens up VLC.

Some codecs only want to live in a specific wrapper and others are a bit less picky: A piece of ProRes video is normally stored in a .mov wrapper  but can as easily be stored in a .mxf container. H.264 is usually found in a .mp4 but lives just as happily in a .mov. An MP3 audio stream is almost always stored in it’s own proprietary .mp3 wrapper.
   
Let’s wrap our heads around all of this with an analogy. If the video and audio that we shoot is a simple strip of film, the wrapper is the case it is stored in. What kind of film is in that bin, 16mm or super 35, and how it is loaded in the projector is the codec. At which speed the film is played and when the next reel needs to be replaced is described in the metadata. Every time we open a media file on our computer we are actually opening one of these cases and the computer is loading it in the projector and playing it back  for us. Easy!
But why are there so many of these? Isn’t one of each enough? Afraid not. There are a lot of different  scenario’s in which video and audio are being used and each codec an wrapper has it’s own sweet spot. There are codecs and wrappers perfect for sharing on the internet, video production, video archival or VFX workflows. Codecs and wrappers also evolve and get replaced with newer, better and smaller successors. It is important to use the right one at the right time or you’ll end up compressing your files to much or to less. This will result in big and slow files or you throwing away essential image information.
Ready for the next step? We’ll dive a bit deeper and take a look at different codecs and wrappers, how they differ from each other and which you can use for what.

#### Which wrapper and codec is right for me?
It depends, of course. There is a right time and place for every sort of codec and wrapper. But there are a few popular ones you should be acquainted with and a few standard use case scenario’s in the video industry that can help you narrow down your hunt for the perfect wrapper and codec for you.
