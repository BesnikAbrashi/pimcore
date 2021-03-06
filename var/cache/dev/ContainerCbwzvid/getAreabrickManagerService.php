<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Pimcore\Extension\Document\Areabrick\AreabrickManager' shared autowired service.

$this->services['Pimcore\Extension\Document\Areabrick\AreabrickManager'] = $instance = new \Pimcore\Extension\Document\Areabrick\AreabrickManager(${($_ = isset($this->services['Pimcore\Extension\Config']) ? $this->services['Pimcore\Extension\Config'] : $this->get('Pimcore\Extension\Config', 1)) && false ?: '_'}, new \Symfony\Component\DependencyInjection\ServiceLocator(array('blockquote' => function () {
    return ${($_ = isset($this->services['AppBundle\Document\Areabrick\Blockquote']) ? $this->services['AppBundle\Document\Areabrick\Blockquote'] : $this->load('getBlockquoteService.php')) && false ?: '_'};
}, 'embed' => function () {
    return ${($_ = isset($this->services['app.area.brick.embed']) ? $this->services['app.area.brick.embed'] : $this->load('getApp_Area_Brick_EmbedService.php')) && false ?: '_'};
}, 'featurette' => function () {
    return ${($_ = isset($this->services['app.area.brick.featurette']) ? $this->services['app.area.brick.featurette'] : $this->load('getApp_Area_Brick_FeaturetteService.php')) && false ?: '_'};
}, 'gallery-carousel' => function () {
    return ${($_ = isset($this->services['app.area.brick.gallery_carousel']) ? $this->services['app.area.brick.gallery_carousel'] : $this->load('getApp_Area_Brick_GalleryCarouselService.php')) && false ?: '_'};
}, 'gallery-folder' => function () {
    return ${($_ = isset($this->services['app.area.brick.gallery_folder']) ? $this->services['app.area.brick.gallery_folder'] : $this->load('getApp_Area_Brick_GalleryFolderService.php')) && false ?: '_'};
}, 'gallery-single-images' => function () {
    return ${($_ = isset($this->services['app.area.brick.gallery_single_images']) ? $this->services['app.area.brick.gallery_single_images'] : $this->load('getApp_Area_Brick_GallerySingleImagesService.php')) && false ?: '_'};
}, 'headlines' => function () {
    return ${($_ = isset($this->services['app.area.brick.headlines']) ? $this->services['app.area.brick.headlines'] : $this->load('getApp_Area_Brick_HeadlinesService.php')) && false ?: '_'};
}, 'horizontal-line' => function () {
    return ${($_ = isset($this->services['app.area.brick.horizontal_line']) ? $this->services['app.area.brick.horizontal_line'] : $this->load('getApp_Area_Brick_HorizontalLineService.php')) && false ?: '_'};
}, 'icon-teaser-row' => function () {
    return ${($_ = isset($this->services['app.area.brick.icon_teaser_row']) ? $this->services['app.area.brick.icon_teaser_row'] : $this->load('getApp_Area_Brick_IconTeaserRowService.php')) && false ?: '_'};
}, 'image' => function () {
    return ${($_ = isset($this->services['app.area.brick.image']) ? $this->services['app.area.brick.image'] : $this->load('getApp_Area_Brick_ImageService.php')) && false ?: '_'};
}, 'image-hotspot-marker' => function () {
    return ${($_ = isset($this->services['app.area.brick.image_hotspot_marker']) ? $this->services['app.area.brick.image_hotspot_marker'] : $this->load('getApp_Area_Brick_ImageHotspotMarkerService.php')) && false ?: '_'};
}, 'pdf' => function () {
    return ${($_ = isset($this->services['app.area.brick.pdf']) ? $this->services['app.area.brick.pdf'] : $this->load('getApp_Area_Brick_PdfService.php')) && false ?: '_'};
}, 'standard-teaser-row' => function () {
    return ${($_ = isset($this->services['app.area.brick.standard_teaser_row']) ? $this->services['app.area.brick.standard_teaser_row'] : $this->load('getApp_Area_Brick_StandardTeaserRowService.php')) && false ?: '_'};
}, 'tabbed-slider-text' => function () {
    return ${($_ = isset($this->services['app.area.brick.tabbed_slider_text']) ? $this->services['app.area.brick.tabbed_slider_text'] : $this->load('getApp_Area_Brick_TabbedSliderTextService.php')) && false ?: '_'};
}, 'text-accordion' => function () {
    return ${($_ = isset($this->services['app.area.brick.text_accordion']) ? $this->services['app.area.brick.text_accordion'] : $this->load('getApp_Area_Brick_TextAccordionService.php')) && false ?: '_'};
}, 'time-slider-featurette' => function () {
    return ${($_ = isset($this->services['app.area.brick.time_slider_featurette']) ? $this->services['app.area.brick.time_slider_featurette'] : $this->load('getApp_Area_Brick_TimeSliderFeaturetteService.php')) && false ?: '_'};
}, 'video' => function () {
    return ${($_ = isset($this->services['app.area.brick.video']) ? $this->services['app.area.brick.video'] : $this->load('getApp_Area_Brick_VideoService.php')) && false ?: '_'};
}, 'wysiwyg' => function () {
    return ${($_ = isset($this->services['app.area.brick.wysiwyg']) ? $this->services['app.area.brick.wysiwyg'] : $this->load('getApp_Area_Brick_WysiwygService.php')) && false ?: '_'};
}, 'wysiwyg-with-images' => function () {
    return ${($_ = isset($this->services['app.area.brick.wysiwyg_with_images']) ? $this->services['app.area.brick.wysiwyg_with_images'] : $this->load('getApp_Area_Brick_WysiwygWithImagesService.php')) && false ?: '_'};
})));

$instance->registerService('blockquote', 'AppBundle\\Document\\Areabrick\\Blockquote');
$instance->registerService('video', 'app.area.brick.video');
$instance->registerService('tabbed-slider-text', 'app.area.brick.tabbed_slider_text');
$instance->registerService('standard-teaser-row', 'app.area.brick.standard_teaser_row');
$instance->registerService('gallery-folder', 'app.area.brick.gallery_folder');
$instance->registerService('image', 'app.area.brick.image');
$instance->registerService('headlines', 'app.area.brick.headlines');
$instance->registerService('pdf', 'app.area.brick.pdf');
$instance->registerService('horizontal-line', 'app.area.brick.horizontal_line');
$instance->registerService('wysiwyg-with-images', 'app.area.brick.wysiwyg_with_images');
$instance->registerService('gallery-single-images', 'app.area.brick.gallery_single_images');
$instance->registerService('gallery-carousel', 'app.area.brick.gallery_carousel');
$instance->registerService('image-hotspot-marker', 'app.area.brick.image_hotspot_marker');
$instance->registerService('time-slider-featurette', 'app.area.brick.time_slider_featurette');
$instance->registerService('wysiwyg', 'app.area.brick.wysiwyg');
$instance->registerService('embed', 'app.area.brick.embed');
$instance->registerService('icon-teaser-row', 'app.area.brick.icon_teaser_row');
$instance->registerService('text-accordion', 'app.area.brick.text_accordion');
$instance->registerService('featurette', 'app.area.brick.featurette');

return $instance;
