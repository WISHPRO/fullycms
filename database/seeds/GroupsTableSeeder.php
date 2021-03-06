<?php

use Illuminate\Database\Seeder;

class GroupsTableSeeder extends Seeder {

    /**
     * Run the database seeding.
     *
     * @return void
     */
    public function run() {

        DB::table('groups')->truncate();

        DB::table('groups')->insert(array(
            array(
                'name'        => 'Admin',
                'permissions' => '{
                          "admin": 1,
                          "admin.dashboard": 1,
                          "admin.settings": 1,
                          "admin.settings.save": 1,
                          "admin.photo-gallery.index": 1,
                          "admin.photo-gallery.view": 1,
                          "admin.photo-gallery.create": 1,
                          "admin.photo-gallery.store": 1,
                          "admin.photo-gallery.edit": 1,
                          "admin.photo-gallery.destroy": 1,
                          "admin.slider.index": 1,
                          "admin.slider.view": 1,
                          "admin.slider.create": 1,
                          "admin.slider.store": 1,
                          "admin.slider.edit": 1,
                          "admin.slider.destroy": 1,
                          "admin.article.index": 1,
                          "admin.article.view": 1,
                          "admin.article.create": 1,
                          "admin.article.store": 1,
                          "admin.article.edit": 1,
                          "admin.article.destroy": 1,
                          "admin.news.index": 1,
                          "admin.news.view": 1,
                          "admin.news.create": 1,
                          "admin.news.store": 1,
                          "admin.news.edit": 1,
                          "admin.news.destroy": 1,
                          "admin.project.index": 1,
                          "admin.project.view": 1,
                          "admin.project.create": 1,
                          "admin.project.store": 1,
                          "admin.project.edit": 1,
                          "admin.project.destroy": 1,
                          "admin.category.index": 1,
                          "admin.category.view": 1,
                          "admin.category.create": 1,
                          "admin.category.store": 1,
                          "admin.category.edit": 1,
                          "admin.category.destroy": 1,
                          "admin.faq.index": 1,
                          "admin.faq.view": 1,
                          "admin.faq.create": 1,
                          "admin.faq.store": 1,
                          "admin.faq.edit": 1,
                          "admin.faq.destroy": 1,
                          "admin.page.index": 1,
                          "admin.page.view": 1,
                          "admin.page.create": 1,
                          "admin.page.store": 1,
                          "admin.page.edit": 1,
                          "admin.page.destroy": 1,
                          "admin.video.index": 1,
                          "admin.video.view": 1,
                          "admin.video.create": 1,
                          "admin.video.store": 1,
                          "admin.video.edit": 1,
                          "admin.video.destroy": 1,
                          "admin.menu.index": 1,
                          "admin.menu.view": 1,
                          "admin.menu.create": 1,
                          "admin.menu.store": 1,
                          "admin.menu.edit": 1,
                          "admin.menu.destroy": 1,
                          "admin.setting.index": 1,
                          "admin.setting.view": 1,
                          "admin.setting.create": 1,
                          "admin.setting.store": 1,
                          "admin.setting.edit": 1,
                          "admin.setting.destroy": 1,
                          "admin.user.index": 1,
                          "admin.user.view": 1,
                          "admin.user.create": 1,
                          "admin.user.store": 1,
                          "admin.user.edit": 1,
                          "admin.user.destroy": 1,
                          "admin.group.index": 1,
                          "admin.group.view": 1,
                          "admin.group.create": 1,
                          "admin.group.store": 1,
                          "admin.group.edit": 1,
                          "admin.group.destroy": 1
                        }',
                'created_at'  => new DateTime,
                'updated_at'  => new DateTime
            )
        ));
    }
}
