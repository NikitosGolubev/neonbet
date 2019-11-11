<template>
    <panel-layout :breadcrumbs="breadcrumbs">
        <panel-text-header>
            <h2>{{title}}</h2>
        </panel-text-header>

        <section class="article">
            <panel-section>
                <figure class="youtube-video">
                    <iframe class="youtube-video__content youtube-video__content_fullwidth" src="https://www.youtube.com/embed/SHLxEYNsGDM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <figcaption class="youtube-video__caption">
                        Подпись к видеоролику
                    </figcaption>
                </figure>
                <p class="article-paragraph">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti dicta dolorem laborum nam natus? Adipisci, aut cumque dignissimos dolorem, eos eum iure libero <b class="text_black">maiores minus neque nesciunt nihil nostrum, quidem vel veniam.</b> Assumenda cum eum quo repellendus saepe similique vel vitae. Aliquid blanditiis delectus dicta explicabo fugiat, illum inventore mollitia nisi odit possimus praesentium quis reiciendis sed sunt voluptas voluptate voluptates! <i class="text_italic">Accusamus aliquid autem dicta dignissimos expedita explicabo iure labore suscipit velit veritatis! Laboriosam magnam nobis quis repudiandae similique!</i> Assumenda beatae commodi consectetur corporis culpa enim eos perferendis saepe sunt voluptatum. Alias doloremque dolores nobis quibusdam unde. Ex, officia perferendis.
                </p>
                <p class="article-paragraph">
                    <span class="h3 alternative">Какой-то подзаголовок</span>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius et nisi repellat ut! Alias asperiores commodi cum cumque delectus doloremque ducimus fuga fugiat harum, nostrum officia optio praesentium qui quibusdam quisquam sapiente sed totam. Animi culpa ea quod sequi voluptatum! Ad, adipisci deleniti dolore eius <span class="text_underline">excepturi exercitationem facere fugit harum ipsam iure modi molestiae natus nesciunt</span> placeat possimus sequi, tempore veniam veritatis voluptas voluptates. Cum doloremque doloribus dolorum facilis modi porro quas quasi quibusdam sunt vitae? Consequuntur eligendi expedita ipsum itaque labore nulla, numquam odit omnis praesentium, quia repellat similique? <span class="text_marked">Adipisci, assumenda eaque exercitationem ipsum nihil nobis quisquam quos reprehenderit saepe totam voluptas voluptate. Blanditiis impedit ipsam natus repudiandae.</span> Ab ad amet, aspernatur assumenda beatae commodi dolor dolore dolores doloribus eaque esse eum inventore magnam maiores molestiae natus optio quae recusandae reiciendis reprehenderit tempora tempore veritatis, vero vitae voluptatum. Aliquam dignissimos dolorem eos id iste <a class="link_article" href="#">nemo provident quo suscipit</a> unde?
                </p>
                <p class="article-paragraph">
                    <span class="h5 alternative">Ещё один подзаголовок</span>
                    <img :src="require('@/assets/img/article-img.jpg')" class="article-img article-img_half article-img_left" alt="Для статьи" />
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aperiam consequatur eius error exercitationem facilis harum, in ipsum, labore laudantium modi mollitia numquam porro quam quas reprehenderit sunt voluptates! Aliquam at ducimus earum eligendi eos error esse excepturi expedita harum hic officia placeat porro possimus quam quibusdam quis quos recusandae, reprehenderit tenetur vel, veniam vero voluptatem! Alias commodi doloremque fugiat incidunt ipsam iusto nobis quia quod? A alias consequatur corporis cumque delectus dicta, ducimus et exercitationem fuga fugiat iste magnam molestiae nam necessitatibus neque nesciunt non omnis provident quam quas qui repellendus sapiente similique sit suscipit ut veritatis voluptates voluptatum!
                </p>
                <p class="article-paragraph">
                    <img :src="require('@/assets/img/article-img.jpg')" class="article-img article-img_half article-img_right" alt="Для статьи" />
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aperiam consequatur eius error exercitationem facilis harum, in ipsum, labore laudantium modi mollitia numquam porro quam quas reprehenderit sunt voluptates! Aliquam at ducimus earum eligendi eos error esse excepturi expedita harum hic officia placeat porro possimus quam quibusdam quis quos recusandae, reprehenderit tenetur vel, veniam vero voluptatem! Alias commodi doloremque fugiat incidunt ipsam iusto nobis quia quod? A alias consequatur corporis cumque delectus dicta, ducimus et exercitationem fuga fugiat iste magnam molestiae nam necessitatibus neque nesciunt non omnis provident quam quas qui repellendus sapiente similique sit suscipit ut veritatis voluptates voluptatum!
                </p>
                <p class="article-paragraph">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aperiam consequatur eius error exercitationem facilis harum, in ipsum, labore laudantium modi mollitia numquam porro quam quas reprehenderit sunt voluptates! Aliquam at ducimus earum eligendi eos error esse excepturi expedita harum hic officia placeat porro possimus quam quibusdam quis quos recusandae, reprehenderit tenetur vel, veniam vero voluptatem! Alias commodi doloremque fugiat incidunt ipsam iusto nobis quia quod? A alias consequatur corporis cumque delectus dicta, ducimus et exercitationem fuga fugiat iste magnam molestiae nam necessitatibus neque nesciunt non omnis provident quam quas qui repellendus sapiente similique sit suscipit ut veritatis voluptates voluptatum!
                    <img :src="require('@/assets/img/article-img.jpg')" class="article-img article-img_half article-img_center" alt="Для статьи" />
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aperiam consequatur eius error exercitationem facilis harum, in ipsum, labore laudantium modi mollitia numquam porro quam quas reprehenderit sunt voluptates! Aliquam at ducimus earum eligendi eos error esse excepturi expedita harum hic officia placeat porro possimus quam quibusdam quis quos recusandae, reprehenderit tenetur vel, veniam vero voluptatem! Alias commodi doloremque fugiat incidunt ipsam iusto nobis quia quod? A alias consequatur corporis cumque delectus dicta, ducimus et exercitationem fuga fugiat iste magnam molestiae nam necessitatibus neque nesciunt non omnis provident quam quas qui repellendus sapiente similique sit suscipit ut veritatis voluptates voluptatum!
                </p>
                <p class="article-paragraph">
                    <span class="h3 alternative">Последний подзаголовок</span>
                    <img :src="require('@/assets/img/article-img.jpg')" class="article-img article-img_fullwidth" alt="Для статьи" />
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis incidunt itaque, minima pariatur provident quidem quod repellendus tenetur ullam unde ut, voluptatibus! Ad animi aspernatur autem beatae blanditiis consequatur cum deserunt eos illo nam nulla possimus quaerat, quasi quos reprehenderit soluta vitae voluptas! Ab eos eveniet in iure maxime natus nulla repellat saepe sint tempore? Accusamus ad aliquid, amet architecto aut consequatur corporis culpa cupiditate deleniti deserunt dolores ducimus earum fugiat fugit incidunt laboriosam, magni nobis omnis pariatur perspiciatis quaerat quibusdam reprehenderit sint, sunt tempore ullam voluptas voluptate. Aspernatur eius fugit incidunt magnam nesciunt officiis praesentium qui reprehenderit, tempora voluptates.
                </p>
            </panel-section>
        </section>
    </panel-layout>
</template>

<script>
    import PanelLayout from "../../../layouts/MainLayout/PanelLayout/PanelLayout";
    import PanelTextHeader from "../../../layouts/MainLayout/PanelLayout/components/PanelTextHeader";
    import PanelSection from "../../../layouts/MainLayout/PanelLayout/components/PanelSection";

    export default {
        name: "Article",
        components: {PanelSection, PanelTextHeader, PanelLayout},
        computed: {
            breadcrumbs() {
                return [
                    {name: "Главная"},
                    {name: "Новости"},
                    {name: this.title}
                ];
            }
        },
        data() {
            return {
                title: "Заголовок какой-то статьи"
            }
        }
    }
</script>

<style lang="sass">
    @import "sass/main"
</style>
