<x-layout>
    <x-slot name="content">
        @foreach ($posts as $post)
             <article>
                <h1>
                    <a href="/posts/{{ $post->slug }}">
                        {{ $post->title }}
                    </a>
                </h1>
                <p>
                   {{ $post->excerpt }}  
                </p>
          </article>
         @endforeach
    </x-slot>
</x-layout>
    <!-- <article><a href="/posts/premier-article">Mon premier article</a>
    <p>

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi rhoncus, leo sed elementum lobortis, enim urna facilisis dolor, in ultrices magna tortor et risus. Curabitur dignissim porttitor mauris. Suspendisse sed dictum tortor. In bibendum neque ac risus malesuada, efficitur iaculis libero sollicitudin. Praesent pulvinar magna sed quam iaculis, sit amet euismod nulla volutpat. Etiam quis tortor vitae nulla suscipit dignissim. Cras volutpat convallis sem, ut interdum erat tristique volutpat. Quisque ultrices sed nibh ut scelerisque. In nec tortor suscipit, maximus lectus eu, dapibus metus. Sed vestibulum dignissim venenatis. Donec at mi vel dolor cursus posuere ac eget justo. Pellentesque suscipit sollicitudin erat, in consequat nibh tempor vel. Integer iaculis facilisis lorem, non convallis massa laoreet ut. Nulla neque lectus, tempor quis felis cursus, iaculis tristique sem. Aenean velit neque, interdum bibendum pellentesque eget, tempor eget elit.

Suspendisse fermentum bibendum augue. Donec nec sem libero. In congue metus nec dolor elementum convallis. Nunc mollis porta quam id pharetra. Suspendisse vehicula hendrerit ipsum porta egestas. Curabitur malesuada mauris quis quam ultricies, sed fermentum dolor aliquam. Nunc tincidunt velit vestibulum sem iaculis, a iaculis augue tempor. Vivamus pellentesque sapien eu ex vehicula fringilla. Aenean ullamcorper sagittis eleifend. Fusce feugiat, lorem id aliquet commodo, orci justo varius tortor, pharetra fringilla lorem nunc ut arcu. Vestibulum finibus cursus purus vitae luctus. Nam sit amet tortor massa.

Phasellus eget ante accumsan, sagittis nisl in, mollis mi. Nullam mollis vel quam eu dignissim. Proin nec massa est. Donec nec ligula in libero placerat pellentesque quis posuere sapien. Donec in congue turpis. Duis convallis pulvinar auctor. Aenean tincidunt tristique velit, nec fermentum enim rutrum ut. Nullam id est nunc. In purus nisl, posuere et ornare eu, ultrices sed mi. Proin porttitor laoreet fringilla. Curabitur bibendum cursus tincidunt. Nunc pellentesque lorem at justo suscipit consequat. Nam condimentum, metus vitae egestas accumsan, odio dui hendrerit lectus, feugiat vehicula est eros sit amet felis. Morbi sit amet blandit ipsum. Quisque sollicitudin turpis vel neque commodo vulputate.

Interdum et malesuada fames ac ante ipsum primis in faucibus. Nulla consequat lobortis pulvinar. Mauris ut dolor ut urna venenatis convallis vitae eu lacus. Phasellus vel egestas leo. Pellentesque nec blandit nibh, vel egestas odio. Maecenas fermentum ex ac vehicula efficitur. Maecenas sagittis dui turpis, nec hendrerit elit imperdiet quis. Morbi nec leo a dolor lacinia efficitur sed nec dui.

Phasellus sagittis sem non enim euismod, eu ultricies mi euismod. Proin dignissim scelerisque rhoncus. Praesent placerat egestas vestibulum. Fusce id porta lorem. Donec sollicitudin bibendum pellentesque. Praesent porta diam et faucibus varius. Donec interdum, purus vitae vehicula blandit, magna neque tincidunt nulla, facilisis tempor erat dui malesuada odio. Aenean vel eleifend nunc. Nunc porta congue nulla. Fusce a viverra augue, in gravida libero.

Donec et tellus mi. Nam viverra volutpat tempor. Proin ex magna, efficitur ullamcorper dignissim ut, cursus vitae nisl. Sed ac enim id massa malesuada molestie id a tortor. Morbi volutpat eget velit eu porttitor. Cras blandit quam eu mauris posuere porta. Morbi urna mauris, vulputate vel nisi eget, convallis scelerisque massa. Integer. </p>
</article>
<article><a href="/posts/second-article">Mon second article</a>
    <p> Nunc at ipsum eget libero tincidunt semper quis non nisl. Duis rhoncus eu augue non porttitor. Curabitur fermentum, leo vel ultrices blandit, ipsum lectus luctus tortor, sed interdum est ex nec magna. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris elementum sem mauris, ut dignissim ex tristique nec. Duis elementum tincidunt magna, sit amet commodo mauris fringilla laoreet. Pellentesque euismod scelerisque massa, in rutrum sem rutrum nec. Vestibulum gravida, diam a gravida iaculis, dolor eros varius augue, sit amet pretium nunc orci non mi. Integer vestibulum tempus odio in semper. Mauris rhoncus, tellus eu porta hendrerit, nibh ante laoreet lectus, vitae dignissim neque augue nec velit. Ut nisl elit, eleifend eu urna at, aliquam vestibulum tortor. Maecenas eget fermentum urna. Maecenas sit amet posuere lectus. Aenean id placerat est, id tempor ex.

Proin sed finibus dolor. Donec quis ipsum nibh. Donec at elementum mauris, id facilisis sem. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque rutrum blandit finibus. In mollis ac dui quis fringilla. Fusce congue venenatis nisi ut rhoncus. Praesent quis risus lorem. In laoreet nec orci at pretium. Mauris urna ante, imperdiet at sodales sit amet, ornare eget augue. Pellentesque euismod consectetur mi consequat laoreet. Sed quam nunc, lobortis blandit metus vitae, sagittis finibus ipsum. Nulla lobortis felis lacus, sit amet tempus dui ultricies et. Maecenas ac iaculis libero. Praesent luctus at enim eget ullamcorper. Fusce a ipsum risus.

Suspendisse potenti. Cras pharetra sed sapien id faucibus. Morbi lobortis neque quis nisi pretium placerat. Donec nisi neque, semper vel justo porttitor, commodo venenatis eros. Donec libero sapien, volutpat eget dolor vitae, rutrum accumsan eros. In malesuada nibh pulvinar laoreet interdum. Vestibulum metus libero, dignissim vitae erat fermentum, lobortis pretium diam. Pellentesque vel urna urna. In hac habitasse platea dictumst. Suspendisse viverra odio nec placerat scelerisque.

Aliquam sapien neque, vulputate sit amet consectetur sit amet, volutpat non dui. Suspendisse ligula metus, convallis quis justo eget, cursus sagittis augue. Nulla vestibulum sem nec lectus posuere, eget volutpat est bibendum. Mauris magna sapien, placerat id dui sit amet, interdum molestie nisi. Nullam facilisis cursus enim eget dignissim. Phasellus aliquam lacus malesuada enim luctus, eu malesuada arcu fermentum. Donec id suscipit eros. Pellentesque vitae molestie tellus, in fringilla est. Sed scelerisque euismod nisi quis ultrices. Curabitur ex lacus, laoreet non interdum nec, ornare id nulla. </p>
</article>
<article><a href="/posts/troisieme-article">Mon troisième article</a>
<p> Aenean pellentesque luctus efficitur. Mauris tempor dictum tellus pretium commodo. Donec sed nulla a nisi rhoncus maximus ut vitae diam. Duis mollis faucibus faucibus. Aliquam erat volutpat. Morbi molestie tempor velit, ut malesuada sapien efficitur et. Maecenas pretium vel est sit amet placerat. Curabitur suscipit eros et commodo placerat.

Fusce sit amet nibh euismod, tristique dui ut, dictum diam. Vivamus vel nulla ultricies eros finibus egestas. Curabitur sed interdum eros, sed suscipit libero. Etiam vitae leo tristique, rhoncus nisl in, varius ex. Aliquam blandit felis quis interdum placerat. Donec lobortis congue risus, in fringilla tellus fringilla sed. Fusce sagittis libero diam, sagittis tincidunt massa rhoncus quis.

Praesent feugiat mauris tortor, eget congue nunc ornare sit amet. Quisque lacinia enim nec est sagittis, quis accumsan massa lobortis. In hac habitasse platea dictumst. Aliquam erat volutpat. Morbi ornare vestibulum velit auctor porttitor. Aliquam maximus fringilla congue. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec congue accumsan diam sit amet elementum. Vivamus sollicitudin diam ut auctor fringilla.

Vestibulum eleifend lectus at libero rhoncus pulvinar. Quisque tellus ex, porta sit amet nulla ut, consequat tempor lorem. Aliquam vel sapien felis. Donec condimentum mattis tellus, lobortis auctor dolor ultrices sit amet. Morbi consequat mauris in sapien porttitor, vel aliquam dolor lobortis. Sed luctus lacus urna, nec efficitur massa ullamcorper quis. Etiam tortor nisl, aliquet quis auctor eget, luctus vel turpis. Pellentesque lectus justo, porttitor sed lacinia eget, tincidunt nec dui. Mauris consectetur augue ante. Aliquam semper, nibh sit amet porttitor lacinia, risus purus dignissim ligula, eu suscipit est ante at ligula. Aliquam id ligula ac felis sodales posuere. Vivamus non dui sit amet augue congue scelerisque sit amet ac leo. Vestibulum viverra ipsum vitae lacus sollicitudin finibus in eget arcu. Nam ligula enim, scelerisque id auctor id, porta vel eros. Donec viverra justo risus, et scelerisque nisi ultrices a.

Sed volutpat eget felis et ornare. Nullam tincidunt nec massa non volutpat. Nullam purus sem, bibendum id neque eget, pulvinar laoreet dolor. Pellentesque non dolor commodo, feugiat felis ac, ornare sem. Duis odio ligula, viverra vel sem vel, tincidunt venenatis nibh. Maecenas ultricies felis erat, quis aliquam purus scelerisque a. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla eu faucibus odio. Donec justo arcu, sodales vel convallis ac, mollis at sem. Sed quis felis dapibus, finibus ante ut, fermentum lorem. Etiam pulvinar, mauris vitae mattis tempor, libero libero semper elit, et egestas magna dolor vitae metus. </p>
</article> -->
